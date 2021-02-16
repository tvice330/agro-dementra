<?php

namespace App\Http\Controllers;
use App\Advantage;
class AdvantageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Advantage::get();
    }
}

