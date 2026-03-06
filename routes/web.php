<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ContactoController;

Route::get('/', [PrincipalController::class, 'index'])->name('index');
Route::get('/nosotros', [NosotrosController::class, 'about'])->name('about');
Route::get('/productos', [ProductosController::class, 'product'])->name('product');
Route::get('/contacto', [ContactoController::class, 'contact'])->name('contact');