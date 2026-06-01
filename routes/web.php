<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function () {
    $productos = [
        ['nombre' => 'Yerba mate', 'precio' => 2500, 'stock' => 15],
        ['nombre' => 'Te verde', 'precio' => 1800, 'stock' => 8],
        ['nombre' => 'Miel pura', 'precio' => 3200, 'stock' => 0],
        ['nombre' => 'Café molido', 'precio' => 2900, 'stock' => 10]  // producto extra
    ];
    return view('productos', compact('productos'));
});

Route::get('/contacto', function () {
    $email = 'contacto@miempresa.com';
    return view('contacto', compact('email'));
});
Route::get('/nosotros', function () {
    return view('nosotros');
});