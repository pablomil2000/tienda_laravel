<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('admin.products.index', compact('products'));
        // return view('admin.products.index');
    }
    public function create(){
        return view('admin.products.create');
    }
    public function store(Request $request){
        $product = new Product();
        $product->name = $request->input('nombre');
        $product->intro_description = $request->input('intro_description');
        $product->full_description = $request->input('full_description');
        $product->price = $request->input('price');
        // $product->name = $request->input('category');
        $product->category_id = 1;

        var_dump($product);
    }

}
