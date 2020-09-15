<?php
/**
    *Autor: Valeria Suárez
    *Autor: Kevin Herrera
    *Autor: Joab Romero
*/

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
})->name('index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/chat', 'ChatController@index')->name('chat');

//cart
Route::post('/design/add-to-cart/{id}', 'CartController@addToCart')->name('cart.addToCart');
Route::get('/cart/remove', 'CartController@removeCart')->name("cart.removeCart");
Route::get('/cart/cart', 'CartController@cart')->name("cart.cart");
Route::post('/cart/buy', 'CartController@buy')->name("cart.buy");

//Design
Route::get('/design/create', 'DesignController@create')->name('design.create');
Route::post('/design/save', 'DesignController@save')->name('design.save');
Route::get('/design/show', 'DesignController@show')->name('design.show');
Route::get('/design/show/{id}', 'DesignController@showDesign')->name("design.showDesign");
Route::get('/design/edit/{id}', 'DesignController@edit')->name("design.edit");
Route::post('/design/update/{id}', 'DesignController@update')->name('design.update');
Route::post('/design/{design}', 'DesignController@destroy')->name('design.destroy');