<?php

namespace App\Http\Controllers\Clients\Partnership;

use App\Http\Controllers\Controller;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Partnership::active()->byPosition()->get();
    }
}

