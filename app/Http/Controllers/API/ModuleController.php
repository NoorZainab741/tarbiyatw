<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Module;
use App\Menu;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    public function getModules(Request $request)
    {
        $modules = Module::where(['menu_id' => $request->menu_id])->get()->all();
        if($modules)
        {
            return response()->json(['modules' => $modules]);
        }
        else
        {
            return response()->json(['modules' => []]);
        }
    }

    public function getAllModules(Request $request)
    {
        $all_modules = Module::get();
        $all_modules->load('menu');

        if($all_modules)
        {
            return response()->json(['all_modules' => $all_modules]);
        }
        else
        {
            return response()->json(['all_modules' => []]);
        }
    }

    public function getAllMenus(Request $request)
    {
        $menus = Menu::get()->all();
        if($menus)
        {
            return response()->json(['menus' => $menus]);
        }
        else
        {
            return response()->json(['menus' => []]);
        }
    }

}
