<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);  // 追加
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');  // 追加

// ダッシュボードのルートは削除（後で作成予定のため）