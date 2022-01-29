<?php

namespace App\Http\Controllers\admin;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class ImageController extends Controller
{
    public function destroy(Request $request, $id){
        $imagen_a_borrar = ProductImage::find($request->id_imagen_a_borrar);

        // dd($request);

        if (substr($imagen_a_borrar->image, 0,4) === "http") {
            $borrada = true;
        }else {
            $ruta = public_path().'/images/products/'.$imagen_a_borrar->image;
            $borrada = File::delete($ruta);
        }

        if ($borrada) {
            $imagen_a_borrar->delete();
        }

        return back();
    }
}
