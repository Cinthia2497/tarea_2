<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\ventaController;

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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/Usuario/{id}', [usuarioController::class, 'show']);


Route::get('/Producto/{id}', [productoController::class, 'show']);

Route::get('/Inventario/{id}', [inventarioController::class, 'show']);


Route::get('/Compra/{id}', [compraController::class, 'show']);

Route::get('/Venta/{id}', [ventaController::class, 'show']);

