<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Design;
use App\Order;
use App\DesignOrder;

//autor: José Joab Romero Humba
class CartController extends Controller
{
    public function addToCart($id, Request $request)
    {
        $data = []; //to be sent to the view
        $quantity = $request->quantity;
        $products = $request->session()->get("designs");
        $products[$id] = $quantity;
        $request->session()->put('designs', $products);
        return back();
    }

    public function removeCart(Request $request)
    {
        $request->session()->forget('designs');
        return redirect()->route('designs.show');
    }

    public function cart(Request $request)
    {
        $products = $request->session()->get("designs");
        if($products){
            $keys = array_keys($products);
            $designModels = Design::find($keys);
            $data["design"] = $designModels;
            return view('cart.cart')->with("data",$data);
        }

        return redirect()->route('designs.show');
    }

     public function buy(Request $request)
    {
        $order = new Order();
        $order->setUserId("1");
        $order->setTotalPrice("0");
        $order->setPaymentType("billullo");
        $order->save();

        $precioTotal = 0;

        $products = $request->session()->get("designs");
        if($products){
            $keys = array_keys($products);
            for($i=0;$i<count($keys);$i++){
                $item = new DesignOrder();
                $item->setDesignId($keys[$i]);
                $item->setOrderId($order->getId());
                $item->setQuantity($products[$keys[$i]]);
                $productActual = Design::find($keys[$i]);
                $precioTotal = $precioTotal + $productActual->price*$products[$keys[$i]];
                $item->setSubTotalPrice($productActual->price*$products[$keys[$i]]);
                $item->save();
            }

            $order->setTotalPrice($precioTotal);
            $order->save();

            $request->session()->forget('designs');
        }

        return redirect()->route('designs.show');
    }
}
