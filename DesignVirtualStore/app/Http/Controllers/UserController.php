<?php
/**
    *Autor: Valeria Suárez
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('role:user');
    } */

    public function index(Request $request)
    {
        $Tprice = $request->session()->get("totalPrice");
        $Tprice['TotalPrice'] = 0;
        $request->session()->put('totalPrice', $Tprice);
        return view('user.index');
    }
}
