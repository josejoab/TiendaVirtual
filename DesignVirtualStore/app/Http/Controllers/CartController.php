<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Design;
use App\Order;
use App\DesignOrder;
use App\User;
use App\Http\Controllers\Auth;

//autor: José Joab Romero Humba
class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart($id, Request $request)
    {
        $data = []; //to be sent to the view
        $quantity = $request->quantity;
        $products = $request->session()->get("designs");
        $products[$id] = $quantity;
        $request->session()->put('designs', $products);

        $design = Design::find($id);
        $price = $request->session()->get("subPrice");
        $price[$id] = $design->getPrice()*$quantity;
        $request->session()->put('subPrice', $price);

        /*$Tprice = $request->session()->get("totalPrice");
        $keys = array_keys($products);
        if(count($keys)<=1){
            $Tprice = 0;
        }
        $temp = $Tprice;
        //$Tprice[0] = $temp + $price;
        $request->session()->put('totalPrice', ($temp + $price));*/

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
            return view('cart.cart2')->with("data",$data);
        }

        return redirect()->route('designs.show');
    }

    public function buy(Request $request)
    {   
        $order = new Order();
        $order->setUserId(Auth()->user()->id);
        $order->setTotalPrice("0");
        $order->setPaymentType("billullo");
        $order->save();

        $precioTotal = 0;

        $products = $request->session()->get("designs");
        $price = $request->session()->get("subPrice");
        $Tprice = $request->session()->get("totalPrice");
        if($products){
            $keys = array_keys($products);
            for($i=0;$i<count($keys);$i++){
                $item = new DesignOrder();
                $item->setDesignId($keys[$i]);
                $item->setOrderId($order->getId());
                $item->setQuantity($products[$keys[$i]]);
                $productActual = Design::find($keys[$i]);
                $precioTotal = $precioTotal + $productActual->getPrice()*$products[$keys[$i]];
                $item->setSubTotalPrice($productActual->getPrice()*$products[$keys[$i]]);
                $item->save();
            }

            $order->setTotalPrice($precioTotal);
            $order->save();

            $request->session()->forget('designs');
        }

        return view('cart.buy');
    }
}