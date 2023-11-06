<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;

Route::get('/', [HomeController::class, 'index']);

// Route::resource('clientes', ClientesController::class);

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [ClientesController::class, 'show'])->name('clientes.show');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
Route::patch('/clientes/{cliente}', [ClientesController::class, 'update']);
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

