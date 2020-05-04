<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $todos = Todo::all();

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
        /* 1)
            $todo = new Todo;
            $todo->todo = $request->todo;
            $todo->save();
        */

        /* 2)
            Todo::create([
                'todo' => $request->todo,
            ]);
         */
        $data = request()->validate([
            'todo' => 'required'
        ]);

        Todo::create($data);

        return redirect()->back();
    }

    public function edit(Todo $todo)
    {
        return view('todos/update')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo)
    {
        $data = request()->validate([
            'todo' => 'required'
        ]);

        $todo->update($data);

        return redirect('/todos');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->back();
    }
}
