<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\BandasController;

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
/*/vendas, /vendas/ver/{id}, /vendas/nova/{produto}/{preco}/{quantidade},
/vendas/atualizar/{id}/{produto}/{preco}/{quantidade}, /vendas/excluir/{id}.*/


/*listarVendas,
verVenda, cadastrarVenda, atualizarVenda e excluirVenda.*/


Route::get('/bandas',[BandasController::class, 'index']);
Route::get('/bandas/nova',[BandasController::class, 'create']);
Route::post('/bandas/nova',[BandasController::class, 'store']);

/*Route::get('/vendas',[vendasController::class, 'listaVendas']);
Route::get('/vendas/ver/{id}',[vendasController::class, 'verVenda']);
Route::get('/vendas/nova/{produto}/{preco}/{quantidade}',[vendasController::class, 'cadastraVenda']);
Route::get('/vendas/atualizar/{id}/{produto}/{preco}/{quantidade}',[vendasController::class, 'atualizarVenda']);
Route::get('/vendas/excluir/{id}',[vendasController::class, 'excluirVenda']);*/
