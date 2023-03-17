<?php

namespace App\Http\Controllers\API\Admin;
use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class AdminMenuController extends Controller
{
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