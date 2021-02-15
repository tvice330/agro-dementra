<?php

namespace App\Http\Controllers;
use App\Setting;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Settings::get();
    }
}

