<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignupController;

Route::get('/', function () {
    return view('welcome');
});

// login（未ログインのみ表示したいなら guest 付けてもOK）
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

// signup：ログイン済みなら login にリダイレクト
Route::get('/signup', [SignupController::class, 'create'])
    ->middleware('guest')
    ->name('signup.create');

Route::post('/signup', [SignupController::class, 'store'])
    ->middleware('guest')
    ->name('signup.store');
