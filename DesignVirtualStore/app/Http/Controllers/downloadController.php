<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Order;
use App\DesignOrder;
use App\User;
use App\Http\Controllers\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use App\Interfaces\pdfDownload;

class downloadController extends Controller
{
    //download PDF
    public function print($language, Request $request){
        //$newPDF = app(pdfDownload::class);
        $newPDF = app()->makeWith(pdfDownload::class, ['request'=>$request]);
        //$newPDF->printPDF($language, $request);
        return $newPDF->printPDF($language, $request);
    }
}
