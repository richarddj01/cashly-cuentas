<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaMovimientoController;
use App\Http\Controllers\CategoriaPorCuentaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\TransferenciaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categoria_movimientos', CategoriaMovimientoController::class);
Route::resource('cuentas', CuentaController::class);
