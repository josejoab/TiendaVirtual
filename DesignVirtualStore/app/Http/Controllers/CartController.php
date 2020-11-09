<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Design;
use App\Order;
use App\DesignOrder;
use App\User;
use App\Http\Controllers\Auth;

/**
    *Autor: Joab Romero
*/

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart($language, $id, Request $request)
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

        $Tprice = $request->session()->get("totalPrice");
        $keys = array_keys($products);
        if(count($keys)<=1){
            $Tprice['TotalPrice'] = 0;
        }
        $Tprice['TotalPrice'] = $Tprice['TotalPrice'] + $price[$id];
        $request->session()->put('totalPrice',$Tprice);

        return redirect()->route('design.show', ['language'=> $language]);
    }

    public function removeCart($language, Request $request)
    {
        $request->session()->forget('designs');
        $Tprice = $request->session()->get("totalPrice");
        $Tprice['TotalPrice'] = 0;
        $request->session()->put('totalPrice', $Tprice);
        $request->session()->forget('subPrice');
        return redirect()->route('design.show', ['language'=> $language]);
    }

    public function cart($language, Request $request)
    {
        $products = $request->session()->get("designs");
        $Tprice = $request->session()->get("totalPrice");
        if($products){
            $keys = array_keys($products);
            $designModels = Design::find($keys);
            $data["design"] = $designModels;
            $data["total"] = $Tprice['TotalPrice'];
            return view('cart.cart2')->with("data",$data);
        }

        return redirect()->route('design.show', ['language'=> $language]);
    }

    public function buy($language, Request $request)
    {   
        $order = new Order();
        $order->setUserId(Auth()->user()->id);
        $order->setTotalPrice("0");
        $order->setPaymentType("No Especifica");
        $order->save();

        $precioTotal = 0;

        $products = $request->session()->get("designs");
        $price = $request->session()->get("subPrice");
        $Tprice = $request->session()->get("totalPrice");
        $precioTotal=0;
        if($products){
            $keys = array_keys($products);
            for($i=0;$i<count($keys);$i++){
                $item = new DesignOrder();
                $item->setDesignId($keys[$i]);
                $item->setOrderId($order->getId());
                $item->setQuantity($products[$keys[$i]]);
                $item->setSubTotalPrice($price[$keys[$i]]);
                $item->save();
            }

            $order->setTotalPrice($Tprice["TotalPrice"]);
            $order->save();

            //$request->session()->forget('pdfData');
            $Tprice['TotalPrice'] = 0;
            $request->session()->put('totalPrice', $Tprice);
            $request->session()->forget('designs');
            $pdfDataaa = $request->session()->get("pdfData");
            $pdfDataaa = $products;
            $pdfDataaa['total']=$precioTotal;
            $request->session()->put('pdfData', $pdfDataaa);
        }

        return view('cart.buy');
    }
}
