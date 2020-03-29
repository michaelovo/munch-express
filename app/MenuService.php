<?php

namespace App\Services;
use App\Models\Menu;

class MenuService
{
    public function getMenuWithCategory(array $restoIds)
    {
        $menus = Menu::whereIn('resto_id',$restoIds)
        ->get()
        ->groupBy('category.name');
        return $menus;
    }
    
}