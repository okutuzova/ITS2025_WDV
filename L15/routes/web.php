<?php

use App\Http\Controllers\ProdottiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home', ProdottiController::class);
Route::get('/prodotti/{id}', [ProdottiController::class, 'show']);
