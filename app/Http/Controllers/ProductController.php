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
    public function store(){
        //
    }

}
