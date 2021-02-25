<?php

namespace App\Http\Controllers\Clients\UserCall;

use App\Http\Controllers\Controller;
use App\Models\UserCall;
use Illuminate\Http\Request;

class UserCallController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->all();
        UserCall::create($user);
        return $user;
    }
}


