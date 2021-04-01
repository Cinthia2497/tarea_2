<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\ventaController;
use App\Http\Controllers\compraController;


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


//Route::get('/Usuario','usuarioController@index');

Route::get('/Usuario', [usuarioController::class, 'index']);
Route::get('/Producto', [productoController::class, 'index']);
Route::get('/Inventario', [inventarioController::class, 'index']);
Route::get('/Compra', [compraController::class, 'index']);
Route::get('/Venta', [ventaController::class, 'index']);
