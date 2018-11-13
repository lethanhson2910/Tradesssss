<?php

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
    return view('welcome');
});

Route::get('home','HomeController@getHome');
Route::get('productdetail','HomeController@getProductdetail');
Route::get('signup','HomeController@getSignup');
Route::get('aboutus','HomeController@getAboutus');
Route::get('checkout','HomeController@getCheckout');
Route::get('login','HomeController@getLogin');
Route::get('category','HomeController@getCategory');
