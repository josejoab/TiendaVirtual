<?php
/**
    *Author: Kevin Herrera
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class ApiController extends Controller
{

    public function inbag()
    {
        $response = Http::get('http://inbagshop.tk/public/api/inbag/products/paginate');
        $data = []; //to be sent to the view
        $data["title"] = "Api inBag";
        $data["api"] = $response->json();


        return view('Api.inBag', compact('data'));
    }   


}
