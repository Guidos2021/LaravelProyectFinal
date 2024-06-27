<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [App\Http\Controllers\productosController::class,'index']);

Route::get('/productos/mostrar', [App\Http\Controllers\productosController::class,'mostrar']);

Route::get('/productos/crear', [App\Http\Controllers\productosController::class,'crear']);

Route::get('/productos/dataformulario', [App\Http\Controllers\productosController::class,'dataformulario'])->name('productos.formdata');

Route::get('/app', function () {
    return view('app',['nombre'=>' Gabriel Vela']);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/pdf', [App\Http\Controllers\productosController::class,'getPDF'])->name('productos.pdf');