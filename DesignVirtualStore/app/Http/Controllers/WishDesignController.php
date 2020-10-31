<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WishDesign;

class WishDesignController extends Controller
{
    public function save($language, Request $request, $wishList_id, $design_id)
    {
        WishDesign::create([
            "wishList_id" => $wishList_id,
            "design_id" => $design_id,
            ]);  
        
        return back();
    }


    public function show()
    {
        $data = [];
        $data["title"] = "Lista de deseos";
        $wishDesigns = wishDesign::select('wishDesigns.id','designs.name','designs.price','designs.image','designs.category_id')
            ->join('designs', 'designs.id', '=', 'wishdesigns.design_id')
            ->get();
        $data["wishDesigns"] = $wishDesigns;

        return view('wishDesign.show')->with("data",$data);
    }



}
