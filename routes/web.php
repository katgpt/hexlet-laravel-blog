<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

// Маршрут для страницы статей
Route::get('articles', function () {
    $articles = App\Models\Article::all();
    return view('articles', ['articles' => $articles]);
});

// Маршрут для страницы about
Route::get('about', [PageController::class, 'about']);
