<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where([['is_super_admin', '0'],['role', 'admin']])->get();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect(route('admins.create'))
                ->withErrors($validator)
                ->withInput();
        }

            $admin = User::create($request->except('image', 'password'));
            $admin->update([
                'password' => Hash::make($request->password),
            ]);

            if ($request->hasFile('image')) {
                $image_path = $request->file('image')->store('admin/' . $admin->id . '/image', 'public');
                $admin->update([
                    'attachment' => $image_path
                ]);
            }
            return redirect(route('admins.index'))->with('success', 'Admin Created Successfully');

    }

    public function show(User $admin)
    {

        return view('admin.show', compact('admin'));
    }

    public function edit(User $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, User $admin)
    {$validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

        if ($validator->fails()) {
            return redirect(route('admins.edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $admin->update($request->except('image','password'));
        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image'))
        {
            $image_path = $request->file('image')->store('admin/'.$admin->id.'/image', 'public');
            $admin->update([
                'attachment' => $image_path
            ]);
        }
        return redirect(route('admins.index'))->with('success', 'Admin Updated Successfully');
    }

    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect(route('admins.index'))->with('warning', 'Admin Deleted Successfully');
    }
}
