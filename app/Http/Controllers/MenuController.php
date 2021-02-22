<?php

namespace App\Http\Controllers;

use App\Menu;

class MenuController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Menu::active()->byPosition()->get();
    }
}

