<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('home')->group(function () {

    Route::resource('/produtos', ProdutoController::class);    
    Route::resource('/clientes', ClienteController::class);

    route::prefix('pedido')->group(function (){

        route::get('/', [PedidoController::class, 'index'])->name('pedido.index');

        route::get('/cadastro', [PedidoController::class, 'cadastro'])->name('pedido.cadastro');
    });
});