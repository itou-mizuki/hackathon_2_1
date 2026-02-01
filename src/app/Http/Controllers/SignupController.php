<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function create()
    {
        if (Auth::check()) {
        return redirect()->route('login');
    }
        return view('signup.signup');
    }

    public function store(SignupRequest $request)
    {
        $user = User::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // 登録したらログインさせたい場合（任意）
        Auth::login($user);

        return redirect('/')->with('status', '登録が完了しました');
    }
}
