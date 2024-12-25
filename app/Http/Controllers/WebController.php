<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
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

    public function orders(){
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view ('order', compact('orders'));
    }
    public function order_now(Request $request){
        Order::create([
            'product_id' => $request['product_id'],
            'user_id' => auth()->user()->id,
            'price' => $request->price,
        ]);
        return response()->json('success');
    }
}
