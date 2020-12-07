<?php

use App\Http\Controllers\ProfissoesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EstadosController;
use App\Http\Controllers\CidadesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\IndexController;
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

Route::get('/', IndexController::class)->name('index');
Route::resource('profissoes', ProfissoesController::class);
Route::resource('clientes', ClientesController::class);
Route::resource('vendas', VendasController::class);
Route::resource('vendedores', VendedoresController::class);
Route::resource('estados', EstadosController::class);
Route::resource('produtos', ProdutosController::class);
Route::resource('cidades', CidadesController::class);

