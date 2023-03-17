<?php

namespace App\Http\Controllers;

use App\Module;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function index()
    {
        $sub_menus = SubMenu::get();
        return view('sub_menu.index',compact('sub_menus'));
    }

    public function create()
    {
//        dd(Module::get()->toArray());
        return view('sub_menu.create');
    }

    public function store(Request $request)
    {
        Module::where(['id' => $request->module_id])->update(['has_submenu' => 1]);

        $sub_menu = SubMenu::create($request->except('icon'));

        if ($request->hasFile('icon'))
        {
            $image_path = $request->file('icon')->store('submenu/'.$sub_menu->id.'/icons', 'public');
            $sub_menu->update([
                'icon' => $image_path
            ]);
        }

        return redirect(route('sub_menus.index'));
    }

    public function show($id)
    {
        $sub_menu = SubMenu::findOrFail($id);
        return view('sub_menu.show', compact('sub_menu'));
    }

    public function edit($id)
    {
        $sub_menu = SubMenu::findOrFail($id);
        return view('sub_menu.edit', compact('sub_menu'));
    }

    public function update(Request $request, SubMenu $sub_menu)
    {
        $sub_menu->update($request->except('icon'));
        if ($request->hasFile('icon'))
        {
            $image_path = $request->file('icon')->store('submenu/'.$sub_menu->id.'/icons', 'public');
            $sub_menu->update([
                'icon' => $image_path
            ]);
        }
        return redirect(route('sub_menus.index'));
    }

    public function destroy($id)
    {
        $sub_menu = SubMenu::findOrFail($id);
        $sub_menu->delete();
        return redirect()->back();
    }
}
