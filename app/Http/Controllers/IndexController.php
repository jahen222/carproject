<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $categories = \App\Category::all();
        $products = \App\Product::orderBy('average_rating', 'desc')->get();
        $recommendedProducts = $products->take(6);

        return view('main_page', compact('categories', 'recommendedProducts'));
    }

    public function home(){

        return view('home');
    }
}
