<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paesi', [CountryController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/quiz', [HomeController::class, 'quiz'])->name('quiz');
Route::get('/training', [HomeController::class, 'training'])->name('training');
Route::get('/flags_quiz', [HomeController::class, 'flags_quiz'])->name('flags_quiz');


Route::post('/quiz', [HomeController::class, 'checkAnswer'])->name('quiz');