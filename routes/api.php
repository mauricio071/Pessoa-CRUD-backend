<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\ResidenciaController;
use App\Http\Controllers\CnhController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/pessoas',[PessoasController::class, 'index'])->name('pessoas.index');
Route::get('/novo/pessoa', [PessoasController::class, 'novo'])->name('pessoas.novo');
Route::post('/novo/pessoa', [PessoasController::class,'store'])->name('pessoas.store');
Route::get('/editar/{id}', [PessoasController::class, 'editar'])->name('pessoas.editar');
Route::post('/editar/{id}', [PessoasController::class, 'edit'])->name('pessoas.edit');
Route::get('/excluir/{id}', [PessoasController::class, 'excluir'])->name('pessoas.excluir');

Route::get('/residencia',[ResidenciaController::class, 'nova'])->name('residencia.nova');
Route::post('/residencia',[ResidenciaController::class, 'store'])->name('residencia.store');
Route::get('/residencia/editar/{id}', [ResidenciaController::class, 'editar'])->name('residencia.editar');
Route::post('/residencia/editar/{id}', [ResidenciaController::class, 'edit'])->name('residencia.edit');
Route::get('/residencia/excluir/{id}', [ResidenciaController::class, 'excluir'])->name('residencia.excluir');

Route::get('/cnh', [CnhController::class, 'nova'])->name('cnh.nova');
Route::post('/cnh', [CnhController::class, 'store'])->name('cnh.store');
Route::get('/cnh/editar/{id}', [CnhController::class, 'editar'])->name('cnh.editar');
Route::post('/cnh/editar/{id}', [CnhController::class, 'edit'])->name('cnh.edit');
Route::get('/cnh/excluir/{id}', [CnhController::class, 'excluir'])->name('cnh.excluir');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
