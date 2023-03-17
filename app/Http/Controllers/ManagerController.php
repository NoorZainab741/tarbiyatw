<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = User::where('role', 'manager')->get();
        return view('manager.index', compact('managers'));
    }

    public function create()
    {
        return view('manager.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect(route('managers.create'))
                ->withErrors($validator)
                ->withInput();
        }

        $manager = User::create($request->except('image','password'));
        $manager->update([
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image'))
        {
            $image_path = $request->file('image')->store('manager/'.$manager->id.'/image', 'public');
            $manager->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('managers.index'))->with('success', 'Manager Created Successfully');
    }

    public function show(User $manager)
    {

        return view('manager.show', compact('manager'));
    }

    public function edit(User $manager)
    {
        return view('manager.edit', compact('manager'));
    }

    public function update(Request $request, User $manager)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

        if ($validator->fails()) {
            return redirect(route('managers.edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $manager->update($request->except('image','password'));
        $manager->update([
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image'))
        {
            $image_path = $request->file('image')->store('manager/'.$manager->id.'/image', 'public');
            $manager->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('managers.index'))->with('success', 'Manager Updated Successfully');
    }

    public function destroy(User $manager)
    {
        $manager->delete();
        return redirect(route('managers.index'))->with('warning', 'Manager Deleted Successfully');
    }
}
