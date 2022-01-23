<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function index($id){
        
        $ProductImages = ProductImage::where('product_id', $id)->orderBy('destacada', 'desc')->get();

        // return $images;
        return view('admin.products.images.index', compact('ProductImages', 'id'));
    }

    public function store(Request $request, $id){
        // guardar img
        $fichero = $request->file('foto');
        $ruta = public_path().'/images/products';
        $nombre_fichero = uniqid().'-'.$fichero->getClientOriginalName();
        $subido = $fichero->move($ruta,$nombre_fichero);

        if ($subido) {
            $imagenProduct = new ProductImage();
            $imagenProduct->image = $nombre_fichero;
            $imagenProduct->Product_id=$id;

            $imagenProduct->save();
        }

        return back();
    }

    public function select($id_product, $id_image){
        ProductImage::where('product_id', $id_product)->update(['destacada' => false]);

        $imagen = ProductImage::find($id_image);
        $imagen->destacada = true;
        $imagen->save();
        
        return back();
    }
}
