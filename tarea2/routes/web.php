<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Usuario', function () {
    return ('Usuario');
});

Route::get('/Producto', function () {
    return ('Producto');
});
Route::get('/Inventario', function () {
    return ('Inventario');
});
Route::get('/Compra', function () {
    return ('Compra');
    
});
Route::get('/Venta', function () {
    return ('Venta');
});
