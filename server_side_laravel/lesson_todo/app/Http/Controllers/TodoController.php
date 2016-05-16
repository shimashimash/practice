<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// Todoモデルをインポートするよっていう意味
use App\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo) {
        $this->todo = $todo;
    }

    public function index() {
        $todos = $this->todo->all();
        // withでview側に値を渡す
        // compact()は省略記法
        // 要は$todosで持ってきた配列がcompactを使うとcompact('todos')で書けちゃう
        // compactはローカル変数から配列を生成
        return view('todo.index')->with(compact('todos'));
    }

    public function create() {
        return view('todo.create');
    }

    public function store(Request $request) {
        $input = $request->all();
        // 下記でフォームから入力された必要な項目のみをDBに登録する処理をしている
        $this->todo->fill($input);
        $this->todo->save();

        return redirect()->to('todo');
    }

    public function edit($id) {
        $todo = $this->todo->find($id);
        return view('todo.edit')->with(compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->todo->where('id', $id)->update(['title' => $input['title']]);

        return redirect()->to('todo');
    }

    public function destroy($id)
    {
        $data = $this->todo->find($id);
        $data->delete();

        return redirect()->to('todo');
    }














}
