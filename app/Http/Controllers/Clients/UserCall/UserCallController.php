<?php

namespace App\Http\Controllers\Clients\UserCall;

use App\Http\Controllers\Controller;
use App\Models\UserCall;
use Illuminate\Http\Request;

class UserCallController extends Controller
{
    public function store(Request $request)
    {
        $data= $request->all();
        $user = UserCall::create($data);
        return $user;
    }
}


