<?php

namespace App\Http\Controllers;

use App\Cooperation;

class CooperationController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Cooperation::active()->byPosition()->get();
    }
}

