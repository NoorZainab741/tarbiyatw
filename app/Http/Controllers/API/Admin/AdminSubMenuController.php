<?php

namespace App\Http\Controllers\API\Admin;

use App\Datauploading;
use App\SubMenu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSubMenuController extends Controller
{
    public function createSubMenu(Request $request)
    {
        $submenu = SubMenu::create($request->except('icon'));

        if ($request->hasFile('icon')) {
            $image_path = $request->file('icon')->store('sub_menu/' . $submenu->id . '/icons', 'public');
            $submenu->update([
                'icon' => $image_path
            ]);
        }
        if($submenu)
        {
            return response()->json(['sub_menu' => 'yes']);
        }
        else
        {
            return response()->json(['sub_menu' => 'no']);
        }
    }
    public function editSubMenu(Request $request)
    {
        $submenu = SubMenu::where('id', $request->id)->first();
        $submenu->update($request->except('icon','_token','_method'));


        if ($request->hasFile('icon')) {
            $image_path = $request->file('icon')->store('sub_menu/' . $submenu->id . '/icons', 'public');
            $submenu->update([
                'icon' => $image_path
            ]);
        }
        if($submenu)
        {
            return response()->json(['sub_menu' => 'yes']);
        }
        else
        {
            return response()->json(['sub_menu' => 'no']);
        }
    }
    public function deleteSubMenu(Request $request)
    {
        $submenu = SubMenu::where('id', $request->id)->first();
        $submenu->delete();
        
        $submenus = Datauploading::where(['module_id', $request->id]);
        $submenus->delete();
        
        if($submenu)
        {
            return response()->json(['sub_menu' => "deleted"]);
        }
        else
        {
            return response()->json(['sub_menu' => "not deleted"]);
        }
    }
}
