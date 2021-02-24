<?php

namespace App\Http\Controllers\Clients\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;

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
