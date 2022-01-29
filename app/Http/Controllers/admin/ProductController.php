<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('admin.products.index', compact('products'));
        // return view('admin.products.index');
    }
    public function create(){
        $categories = Category::get();
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request){
        
        
        // dd($request->all());
        
        $product = new Product();
        $product->name = $request->input('nombre');
        $product->intro_description = $request->input('intro_description');
        $product->full_description = $request->input('full_description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id == 0 ? null : $request->category_id;
        // $product->category_id = 1;
        $product->save();

        return redirect(Route('admin.products.index'));
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::get();
        // var_dump($product);
        return view('admin.products.edit', compact('product', 'categories'));
    }
    
    public function update(Request $request, $id){
        // $product = new Product();
        $product=Product::find($id);
        $product->name = $request->input('nombre');
        $product->intro_description = $request->input('intro_description');
        $product->full_description = $request->input('full_description');
        $product->price = $request->input('price');
        $product->category_id = $request->category_id == 0 ? null : $request->category_id;
        // $product->category_id = 1;
        $product->save();
        echo "<h1>update</h1>";
        // return redirect(Route('admin.products.index'));
    }

    Public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}
