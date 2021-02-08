<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Models\User;
class MenuController extends Controller
{

    public function menu()
    {
        $menu = Menu::all();
        dd($menu);
    }
}

