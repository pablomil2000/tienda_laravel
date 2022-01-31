<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){

        $products = Product::paginate(6);
        return view('Welcome', compact('products'));
    }
}
