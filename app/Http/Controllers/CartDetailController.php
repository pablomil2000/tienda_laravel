<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartDetailController extends Controller
{
    public function store(Request $request){
        $detalleCarrito = new CartDetail();
        $detalleCarrito->cart_id = auth()->user()->getIdCarritoAttribute;
        $detalleCarrito->product_id = $request->product_id;
        $detalleCarrito->cantidad = $request->cantidad;
        // $detalleCarrito->save();
        return $detalleCarrito;
    }
}
