<?php

use Illuminate\Support\Facades\Route;

// Todo作成ページ
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