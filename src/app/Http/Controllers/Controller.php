<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // 一覧表示
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('todo', compact('todos'));
    }

    // 新規作成
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        Todo::create([
            'task' => $request->task,
        ]);

        return redirect()->route('todo.index')->with('success', 'Todoを作成しました！');
    }

    // 削除
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('todo.index')->with('success', 'Todoを削除しました！');
    }
}
