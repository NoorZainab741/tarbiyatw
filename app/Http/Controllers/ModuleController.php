<?php


namespace App\Http\Controllers;


use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    public function index()
    {
    $modules = Module::get();
    return view('module.index',compact('modules'));
    }

    public function create()
    {
    return view('module.create');
    }

    public function store(Request $request)
    {
        $module = Module::create($request->except('icon'));

        if ($request->hasFile('icon'))
        {
            $image_path = $request->file('icon')->store('module/'.$module->id.'/icons', 'public');
            $module->update([
                'icon' => $image_path
            ]);
        }

        return redirect(route('modules.index'));
    }

    public function show($id)
    {
    $module = Module::findOrFail($id);
    return view('module.show', compact('module'));
    }

    public function edit($id)
    {
    $module = Module::findOrFail($id);
    return view('module.edit', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $module->update($request->except('icon'));
        if ($request->hasFile('icon'))
        {
            $image_path = $request->file('icon')->store('module/'.$module->id.'/icons', 'public');
            $module->update([
                'icon' => $image_path
            ]);
        }
    return redirect(route('modules.index'));
    }

    public function destroy($id)
    {
    $module = Module::findOrFail($id);
    $module->delete();
    return redirect()->back();
    }
}
