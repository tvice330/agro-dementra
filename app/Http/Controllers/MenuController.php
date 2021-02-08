<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Models\User;
class MenuController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Menu::get();
    }
}

