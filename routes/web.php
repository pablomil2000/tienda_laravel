<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\ProductController as ProductControllerPublic;


Auth::routes();

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [WelcomeController::class, 'welcome'])->name('home');
Route::get('/products/{id}', [ProductControllerPublic::class, 'show']);

Route::middleware(['auth'])->group(function(){
    Route::get('/cart', [WelcomeController::class, 'index'])->name('carrito');
    Route::get('/order', [CartController::class, 'update'])->name('pedido');
    Route::post('/cart', [CartDetailController::class, 'store'])->name('carrito.store');

    Route::get('/cart/{id}/delete', [CartDetailController::class, 'delete']);
    
});


Route::middleware(['auth','admin'])->namespace('admin')->group(function(){
    // Crud
    // mostrar lista admin
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    // Crear producto admin
    Route::GET('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    //Guardar producto admin
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    //Editar productos
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::post('/admin/products/{id}/edit', [ProductController::class, 'update'])->name('admin.products.update');
    //Borrar producto
    // Route::get('/admin/products/{id}/delete', [ProductController::class, 'destroy'])->name('admin.products.delete');
    // Route::POST('/admin/products/{id}/delete', [ProductController::class, 'destroy'])->name('admin.products.delete');
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.delete');
    
    //Imagenes
    Route::get("/admin/products/{id}/imagenes", [ProductImageController::class ,"index"])->name("images.index");    //ver
    Route::post("/admin/products/{id}/imagenes", [ProductImageController::class ,"store"])->name("images.index");   //subir
    Route::delete("/admin/products/{id}/imagenes", [ImageController::class ,"destroy"])->name("images.destroy");    //delete
    //img destacada
    Route::get('/admin/product/{product_id}/images/select/{id}', [ProductImageController::class, 'select']);                         //destacar imagen
});
