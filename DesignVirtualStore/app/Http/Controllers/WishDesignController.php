<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WishDesign;

class WishDesignController extends Controller
{
    public function save(Request $request, $wishList_id, $design_id)
    {
        WishDesign::create([
            "wishList_id" => $wishList_id,
            "design_id" => $design_id,
            ]);  
        
        return back();
    }



}
