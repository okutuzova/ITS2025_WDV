<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/olga', function () {
    return view('test', ["chiave" => "valore"]);
});
Route::get('/products', [ProductController::class,"index"] );
Route::post('/products', [ProductController::class,"store"] );