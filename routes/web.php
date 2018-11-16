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
Route::get('productdetail/{id}','HomeController@getProductdetail')->name('f.home.productdetail');
Route::get('signup','HomeController@getSignup')->name('f.home.signup');
Route::post('signup','HomeController@postSignup')->name('f.home.signup');
Route::get('aboutus','HomeController@getAboutus')->name('f.home.aboutus');
Route::get('login','HomeController@getLogin')->name('f.home.login');
Route::post('login','HomeController@postLogin')->name('f.home.login');
Route::get('logout','HomeController@getLogout')->name('f.home.logout');
Route::get('category/{type}','HomeController@getCategory')->name('f.home.category');
Route::get('contact','HomeController@getContact')->name('f.home.contact');
Route::get('search','HomeController@getSearch')->name('f.home.search');

Route::get('cart','CartController@getCart')->name('f.cart.cart');
Route::post('cart','CartController@postCart')->name('f.cart.cart');
