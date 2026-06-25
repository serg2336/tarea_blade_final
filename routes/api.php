<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Provincia;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/provincias', function () {
    return Provincia::all();
});

Route::get('/provincias', function () {
    return Provincia::orderBy('nombre')->get();
});