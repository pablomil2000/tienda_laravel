<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){

        $products = Product::get();


        return view('Welcome', compact('products'));
    }
}
