<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Module;
use App\SubMenu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function getSubMenus(Request $request)
    {
        $sub_menus = SubMenu::where(['module_id' => $request->module_id])->get()->all();
        if($sub_menus)
        {
            return response()->json(['sub_menus' => $sub_menus]);
        }
        else
            {
            return response()->json(['sub_menus' => []]);
        }
    }
    public function getAllSubMenus(Request $request)
    {
        $sub_menus = SubMenu::get();
        $sub_menus->load('module');

        if($sub_menus)
        {
            return response()->json(['sub_menus' => $sub_menus]);
        }
        else
            {
            return response()->json(['sub_menus' => []]);
        }
    }

}
