<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::get();
        return view('todo.index',compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $todo = ToDo::create($request->all());


//        $admin = Admin::where('email', 'admin@system.com')->first();
//        $admin->notify(new PostCreationNotification($post));
        return redirect(route('todos.index'));    }

    public function show($id)
    {
        $todo = ToDo::findOrFail($id);
        return view('feedback.show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = ToDo::findOrFail($id);
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, ToDo $todo)
    {
        $todo->update($request->all());
        return redirect(route('todos.index'));
    }

    public function destroy($id)
    {
        $todo = ToDo::findOrFail($id);
        $todo->delete();
        return redirect()->back();
    }
    public function changeStatus(ToDo $todo){

        // dd($adminShop->status);
        if($todo->status==1){
            // dd('verified');
            $todo->update([
                'status'=> '0'
            ]);
        }
        else{
            // dd('unverified');
            $todo->update([
                'status'=> '1'
            ]);
        }
        return redirect()->back();

    }
}
