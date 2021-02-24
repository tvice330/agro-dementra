<?php

namespace App\Http\Controllers\Clients\Advantage;

use App\Http\Controllers\Controller;
use App\Models\Advantage;

class AdvantageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Advantage::active()->byPosition()->get();
    }
}

