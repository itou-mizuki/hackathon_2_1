<?php

use Illuminate\Support\Facades\Route;


// Todo作成ページ
=======
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);  // 追加
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');  // 追加

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

// ダッシュボードのルートは削除（後で作成予定のため）