<?php
/**
    *Autor: Kevin Herrera
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function save(Request $request)
    {
        Category::validate($request);
        Category::create($request->only(["name","description"]));  
        
        return back();
    }



}
