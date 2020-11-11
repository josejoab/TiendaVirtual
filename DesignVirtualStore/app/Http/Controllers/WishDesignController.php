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
        $data["title"] = "WishList";
        $wishDesigns = wishDesign::select('wish_designs.id','designs.name','designs.price','designs.image','designs.category_id')
            ->join('designs', 'designs.id', '=', 'wish_designs.design_id')
            ->join('wish_lists', 'wish_lists.id', '=', 'wish_designs.wishlist_id')
            ->where('wish_lists.id' , Auth()->user()->id)
            ->orderBy('id')
            ->get();
        $data["wishDesigns"] = $wishDesigns;

        return view('wishDesign.show')->with("data",$data);
    }



}
