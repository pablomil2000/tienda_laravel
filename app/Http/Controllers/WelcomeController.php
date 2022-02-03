<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){

        if (isset($_GET['busqueda'])) {
            $busqueda = $_GET['busqueda'];
            // var_dump($busqueda);
            $products = Product::where('name', 'like', '%'.$busqueda.'%')->paginate(6);
            // $products = Product::paginate(6);
        }else {
            $products = Product::paginate(6);
        }

        // $products = Product::paginate(6);
        return view('Welcome', compact('products'));
    }

    public function index(){

        // $products = Product::paginate(6);
        return view('carrito');
    }
}
