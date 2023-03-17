<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EditorController extends Controller
{
    public function index()
    {
        $editors = User::where('role' , 'editor')->get();
        return view('editor.index', compact('editors'));
    }

    public function create()
    {
        return view('editor.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect(route('editors.create'))
                ->withErrors($validator)
                ->withInput();
        }

        $editor = User::create($request->except('image','password'));
        $editor->update([
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image'))
        {
            $image_path = $request->file('image')->store('editor/'.$editor->id.'/image', 'public');
            $editor->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('editors.index'))->with('success', 'Editor Created Successfully');
    }

    public function show(User $editor)
    {

        return view('editor.show', compact('editor'));
    }

    public function edit(User $editor)
    {
        return view('editor.edit', compact('editor'));
    }

    public function update(Request $request, User $editor)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect(route('editors.edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $editor->update($request->except('image','password'));
        $editor->update([
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image'))
        {
            $image_path = $request->file('image')->store('editor/'.$editor->id.'/image', 'public');
            $editor->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('editors.index'))->with('success', 'Editor Updated Successfully');
    }

    public function destroy(User $editor)
    {
        $editor->delete();
        return redirect(route('editors.index'))->with('warning', 'Editor Deleted Successfully');
    }
}
