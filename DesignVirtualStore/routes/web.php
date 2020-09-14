<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/prueba/designs', 'DesignController@show')->name('designs.show');
Route::get('/prueba/designs{id}', 'DesignController@showDesign')->name('design.showOne');

Route::post('/design/add-to-cart/{id}', 'CartController@addToCart')->name('cart.addToCart');
Route::get('/cart/remove', 'CartController@removeCart')->name("cart.removeCart");
Route::get('/cart/cart', 'CartController@cart')->name("cart.cart");
Route::post('/cart/buy', 'CartController@buy')->name("cart.buy");