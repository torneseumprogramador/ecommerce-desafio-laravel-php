<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientesController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('clientes', ClientesController::class);
