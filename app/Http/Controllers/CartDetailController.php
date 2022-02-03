<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartDetailController extends Controller
{

    public function store(Request $request){
        $detalle = new CartDetail();
        
        $detalle->cart_id = auth()->user()->carrito->id;
        $detalle->product_id = $request->product_id;
        $detalle->cantidad = $request->cantidad;
        $detalle->save();
        $producto = Product::findOrFail($request->product_id);
        $aviso = "El producto ".$producto->name." se ha añadido al carrito";

        return back()->with(compact("aviso"));
    }

    public function delete($id){
        $linea = CartDetail::find($id);
        if ($linea) {
            if ($linea->cart_id == auth()->user()->carrito->id) {
                $linea->delete();
                $aviso="Producto eliminado";
                return back()-> with(compact("aviso"));
            }
        }
        return back();
    }
}
