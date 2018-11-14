<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\Category;
use App\User;
use Auth;
use Hash;


class HomeController extends Controller
{
    public function getHome()
    {
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->paginate(2,['*'],'newproductpage');
        $product_sale = Product::where('promotion_price','<>',0)->paginate(2,['*'],'productsalepage');
        return view('page.home',compact('slide','new_product','product_sale'));

    }
    public function getProductdetail()
    {
        return view('page.detail');
    }
    public function getSignup()
    {
        return view('page.signup');
    }
    protected function postSignup(Request $request)
    {
          $user = new User;
          $user->email = $request->email;
          $user->full_name = $request->name;
          $user->password = Hash::make($request->password);
          $user->save();
          return redirect()->route('f.home.signup')->with('thanhcong', 'Đã tạo tài khoản thành công');
    }
    public function getLogin()
    {
        return view('page.login');
    }
    public function postLogin(Request $request)
    {
      $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('f.home.home');

      }  else {
        return redirect()->route('f.home.login')->with('thatbai', 'Đăng nhập thất bại');
        }

    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('f.home.home');
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
    public function getSearch(Request $request)
    {
        $product = Product::where('name','like','%'.$request->search.'%')->orWhere('unit_price',$request->search)->get();
        return view('page.search',compact('product'));
    }

}
