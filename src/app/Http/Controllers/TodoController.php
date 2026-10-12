<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
     public function index()
    {
        $todo = new Todo();
        //todosテーブル全てのデータを取得する　sql文でいうとselect * from todos;と同じ意味
        $todos = $todo->all();
        //  第一関数index.blade.phpを指定、todosは、View側で使う変数名
        //  　第二関数　Controllerで取得したデータをViewに渡す　Controller側に入っている実際のデータ
        return view('todo.index', ['todos' => $todos]);
    }
    
    public function create()
    {
        return view('todo.create'); 
    }

    public function store(Request $request)
{
    $inputs = $request->all(); 
    dd($inputs); 

    $todo = new Todo();
    $todo->fill($inputs); 
    $todo->save();

    return redirect()->route('todo.index');
}
}

