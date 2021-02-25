<?php

namespace App\Http\Controllers\Clients\Action;

use App\Http\Controllers\Controller;
use App\Models\Action;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Action::with('action_values')->get();
    }
}


