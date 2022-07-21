<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('productos');
});
Route::get('/sucursales', function () {
    return view('sucursales');
});
