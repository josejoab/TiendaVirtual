<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Order;
use App\DesignOrder;
use App\User;
use App\Http\Controllers\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class downloadController extends Controller
{
    //download PDF
    public function print($language, Request $request){

        $products = $request->session()->get("pdfData");
        if($products){
            $total = $products['total'];
            unset($products['total']);
            $keys = array_keys($products);
            $data['total']=$total;
            $designModels = Design::find($keys);
            $data["design"] = $designModels;
            $pdf = \PDF::loadView('pdf', array('data' => $data));
            $request->session()->forget('pdfData');
            return $pdf->download('SketchDesing.pdf');
        }
    }
}
