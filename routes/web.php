<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Crud

// mostrar lista admin
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
// Crear producto admin
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
//Guardar producto admin
Route::POST('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');

