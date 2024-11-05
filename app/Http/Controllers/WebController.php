<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function productdetail(){
        return view('productdetail');
    }
}
