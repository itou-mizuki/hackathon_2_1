<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログインフォームを表示するメソッド（変更なし）
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // ログイン処理を行うメソッド（新規追加）
    public function login(Request $request)
    {
        // 入力値の検証
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // ログイン試行
        if (Auth::attempt($credentials)) {
            // ログイン成功時
            $request->session()->regenerate();
            return redirect('/');
        }

        // ログイン失敗時
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->onlyInput('email');
    }

    // ログアウト処理を行うメソッド（新規追加）
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}