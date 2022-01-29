<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id){
        $product = Product::find($id);

        return view('products/show', compact('product'));
    }
}
