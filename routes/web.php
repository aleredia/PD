<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ContactoController;

Route::get('/', [PrincipalController::class, 'index']);
Route::get('/nosotros', [NosotrosController::class, 'about']);
Route::get('/productos', [ProductosController::class, 'product']);
Route::get('/contacto', [ContactoController::class, 'contact']);