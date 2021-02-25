<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidosUser', [PedidoController::class, 'pedidosUser']);

Route::get('/', [PlatoController::class, 'index']);
Route::get('/nuevoPlato', [PlatoController::class, 'create']);
Route::get('/{id}/borrar', [PlatoController::class, 'destroy']);
Route::get('/{id}', [PlatoController::class, 'show']);
Route::post('/', [PlatoController::class, 'store']);

Route::post('/{id}', [PedidoController::class, 'store']);



