<?php

namespace App\Http\Controllers;


use App\Models\CartDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartCartDetail extends Controller
{

    public function store(Request $request){
        $detalleCarrito = new CartDetail();

        $detalleCarrito->cart_id = auth()->user()->id_carrito;
        $detalleCarrito->product_id = $request->product_id;
        $detalleCarrito->cantidad = $request->cant;

        $detalleCarrito->save();

        return back();
    }
}
