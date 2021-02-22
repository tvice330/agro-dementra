<?php

namespace App\Http\Controllers;

use App\Advantage;
use App\Category;

class AdvantageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Category::active()->byPosition()->get();
    }
}

