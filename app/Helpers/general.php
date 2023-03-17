<?php

function _getAllModules()
{
    $modules = \App\Module::all();
    return $modules;
}
function _getAllModulesWithoutSubmenu()
{
    $modules = \App\Module::where(['has_submenu' => 0])->get()->all();
    return $modules;
}

function _getAllSubMenus()
{
    $sub_menus = \App\SubMenu::all();
    return $sub_menus;
}

function _getTabNames()
{
    $menus = \App\Menu::all();
    return $menus;
}
