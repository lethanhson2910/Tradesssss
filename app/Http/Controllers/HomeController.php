<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Category;


class HomeController extends Controller
{
    public function getHome()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        return view('page.home',compact('slide','new_product'));
    }
    public function getProductdetail()
    {
        return view('page.detail');
    }
    public function getSignup()
    {
        return view('page.signup');
    }
    public function getLogin()
    {
        return view('page.login');
    }
    public function getAboutus()
    {
        return view('page.aboutus');
    }
    public function getCheckout()
    {
        return view('page.checkout');
    }
    public function getCategory()
    {
        return view('page.type');
    }
}
