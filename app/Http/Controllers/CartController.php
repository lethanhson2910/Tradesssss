<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CartController extends Controller
{

    public function getCart()
    {
        return view('page.cart');
    }

    public function postCart(Request $request)
    {
        Cart::add($request->id,$request->name,1,$request->unit_price)->associate('App\Product');
        return redirect()->route('f.cart.cart')->with('success_message', 'Product added to your cart');
    }
    public function getDelete($id)
    {
      Cart::remove($id);
      return back()->with('success_message', 'Item has been removed');
    }
}
