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

Route::get('/design/create', 'DesignController@create')->name('design.create');
Route::post('/design/save', 'DesignController@save')->name('design.save');
Route::get('/design/show', 'DesignController@show')->name('design.show');
Route::get('/design/show/{id}', 'DesignController@showDesign')->name("design.showDesign");
Route::get('/design/edit/{id}', 'DesignController@edit')->name("design.edit");
Route::post('/design/update/{id}', 'DesignController@update')->name('design.update');
Route::post('/design/{design}', 'DesignController@destroy')->name('design.destroy');

