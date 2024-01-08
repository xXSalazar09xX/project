<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Ruta para mostrar la lista de productos
Route::get("/", [ProductoController::class, 'index']);
//Rutas para agregar
Route::post('/agregar',[ProductoController::class,'store']);

