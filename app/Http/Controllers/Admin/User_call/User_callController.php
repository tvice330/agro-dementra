<?php

namespace App\Http\Controllers\Admin\User_call;

use App\Http\Controllers\Controller;
use App\Models\User_call;
use Illuminate\Http\Request;

class User_callController extends Controller
{
    public function index()
    {
        return User_call::get();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        foreach ($data as $item)
            User_call::create($item);
    }
}

