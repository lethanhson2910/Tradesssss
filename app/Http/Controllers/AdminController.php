<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminController extends Controller
{
    public function getHome()
    {
        return view('admin.home');
    }
    public function getCreate()
    {
        $categories = Category::all();

        return view('admin.create', compact('categories'));
    }
    public function postCreate(Request $request)
    {
        $fileimage = $request->image->getClientOrginalName();
        $product = new Product;
        $product->id= $request->id;
        $product->name= $request->name;
        $product->category_id= $request->category_id;
        $product->description= $request->description;
        $product->unit_price= $request->unit_price;
        $product->promotion_price= $request->promotion_price;
        $product->image= $fileimage;
        $product->unit= $request->unit;
        $product->new= $request->new;

        $product->save();
        $request->image->storeAs('image',$fileimage);
        return redirect()->route('f.admin.list');
    }
    public function getList()
    {
        $product = Product::all();
        return view('admin.list', compact('product'));
    }

    public function getEdit($id)
    {
        $product = nhanvien::find($id);

        return view("admin.edit", compact('product'));
    }

    // public function postEdit(Request $request, $id)
    // {
    //     $product = Product::find($id);
    //     //       $request-> validate([
    //     //     'name'=> 'required|string|min:6',
    //     //     'email'=> 'required|email|max:255|unique:nhanvien,email,'.$nhanvien->id
    //     //   ],
    //     //   [
    //     //     'name.required' =>'ten khong duoc bo trong',
    //     //     'name.string' =>'ten phai la chu',
    //     //     'name.min' =>'ten phai lon hon 6 ki tu',
    //     //     'email.required' =>'email khong duoc bo trong',
    //     //     'email.email' =>'email sai dinh dang',
    //     //     'email.unique' =>'email da duoc su dung'
    //     //   ]
    //     // );
    //     $product->id= $request->id;
    //     $product->name= $request->name;
    //     $product->category_id= $request->category_id;
    //     $product->description= $request->description;
    //     $product->unit_price= $request->unit_price;
    //     $product->promotion_price= $request->promotion_price;
    //     $product->image= $request->image;
    //     $product->unit= $request->unit;
    //     $product->new= $request->new;
    //     $product->save();
    //
    //     return redirect()->route('f.admin.list');
    // }

    public function getDelete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('f.admin.list');
    }
}
