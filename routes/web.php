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

Route::get('home','HomeController@getHome')->name('f.home.home');
Route::get('productdetail','HomeController@getProductdetail')->name('f.home.productdetail');
Route::get('signup','HomeController@getSignup')->name('f.home.signup');
Route::get('aboutus','HomeController@getAboutus')->name('f.home.aboutus');
Route::get('checkout','HomeController@getCheckout')->name('f.home.checkout');
Route::get('login','HomeController@getLogin')->name('f.home.login');
Route::get('category/{type}','HomeController@getCategory')->name('f.home.category');
