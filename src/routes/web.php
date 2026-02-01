<?php

use Illuminate\Support\Facades\Route;


// Todo作成ページ
=======
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignupController;


Route::get('/', function () {
    return view('welcome');
});


// 作成ボタンを押したら次のページへ
Route::post('/todo/create', function () {
    // ここでデータベースに保存する処理（後で実装）
    
    // 次のページへ遷移
    return redirect('/todo/list');
});

// 次のページ（仮）
Route::get('/todo/list', function () {
    return '<h1>Todo作成完了！一覧ページ（未実装）</h1>';
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
