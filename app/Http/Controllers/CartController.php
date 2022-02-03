<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function update(){
        $carrito = auth()->user()->carrito;
        $carrito->fecha_pedido = now();
        $carrito->estado = 'pendiente';
        
        $carrito->save();
        return back();
    }
}
