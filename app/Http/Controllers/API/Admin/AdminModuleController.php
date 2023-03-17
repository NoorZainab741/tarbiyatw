<?php

namespace App\Http\Controllers\API\Admin;

use App\Module;
use App\SubMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminModuleController extends Controller
{
    public function createModule(Request $request)
    {
        $module = Module::create($request->except('icon'));

        if ($request->hasFile('icon')) {
            $image_path = $request->file('icon')->store('module/' . $module->id . '/icons', 'public');
            $module->update([
                'icon' => $image_path
            ]);
        }
        if($module)
        {
            return response()->json(['module' => 'yes']);
        }
        else
        {
            return response()->json(['module' => 'no']);
        }
    }
    public function editModule(Request $request)
    {
        $module = Module::where('id', $request->id)->first();
        $module->update($request->except('icon','_token','_method'));


        if ($request->hasFile('icon')) {
            $image_path = $request->file('icon')->store('module/' . $module->id . '/icons', 'public');
            $module->update([
                'icon' => $image_path
            ]);
        }
        if($module)
        {
            return response()->json(['module' => 'yes']);
        }
        else
        {
            return response()->json(['module' => 'no']);
        }
    }
    public function deleteModule(Request $request)
    {
        $module = Module::where('id', $request->id)->first();
        $module->delete();
        $mod = $module->has_sub_menu;
        if($mod == 1)
        {
        $submenus = SubMenu::where(['module_id', $request->id]);
        $submenus->delete();
        }
        if($module)
        {
            return response()->json(['module' => "deleted"]);
        }
        else
        {
            return response()->json(['module' => "not deleted"]);
        }
    }
}
