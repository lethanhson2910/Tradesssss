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
        $new_product = Product::where('new', 1)->paginate(2,['*'],'newproductpage');
        $product_sale = Product::where('promotion_price','<>',0)->paginate(2,['*'],'productsalepage');
        return view('page.home',compact('slide','new_product','product_sale'));

    }
    public function getProductdetail(Request $request)
    {
        $product_detail = Product::where('id',$request->id)->first();
        $related_product = Product::where('category_id',$product_detail->category_id)->paginate(3);
        return view('page.detail',compact('product_detail','related_product'));
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
    public function getCategory($type)
    {
      $product_type = Product::where('category_id',$type)->paginate(2);
      $another_product = Product::where('category_id','<>',$type)->paginate(3);
      $typee =Category::all();
      $typename = Category::where('id',$type)->first();
        return view('page.type',compact('product_type','another_product','typee','typename'));
    }
}
