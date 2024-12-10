<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class WebController extends Controller
{
    public function about(){
        return view('about');
    }
    public function blog(){
        return view('blog');
    }
    public function shop(){
        return view('shop');
    }
    public function productdetail($id){
        $product = Product::find($id);
        return view('productdetail',compact('product'));
    }
    public function welcome(){
        $products = Product::with('category')->take(4)->get();
        return view('welcome',compact('products'));
    }
}
