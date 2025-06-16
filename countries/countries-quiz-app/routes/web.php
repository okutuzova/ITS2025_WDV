<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CapitalQuizController;
use App\Http\Controllers\FlagQuizController;
use Illuminate\Support\Facades\Route;

// First page - User name input
Route::get('/', [HomeController::class, 'start'])->name('home');
Route::post('/start', [HomeController::class, 'storeName'])->name('storeName');

Route::get('/paesi', [CountryController::class, 'index']);

Route::get('/start', [HomeController::class, 'index'])->name('start');
Route::get('/quiz', [CapitalQuizController::class, 'quiz'])->name('quiz');
Route::get('/training', [HomeController::class, 'training'])->name('training');
Route::get('/flags_quiz', [FlagQuizController::class, 'flags_quiz'])->name('flags_quiz');


Route::post('/quiz', [CapitalQuizController::class, 'checkAnswer'])->name('quiz');
Route::post('/flags_quiz', [FlagQuizController::class, 'checkFlag'])->name('flags.check');



// End game

Route::post('/end', [HomeController::class, 'endGame'])->name('endGame');

Route::get('/leaderboard', function () {
    $scores = \App\Models\Score::orderByDesc('score')->limit(10)->get();
    return view('leaderboard', compact('scores'));
})->name('leaderboard');

