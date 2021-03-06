<?php

namespace App\Http\Controllers\Clients\UserCall;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCallRequest;
use App\Http\Resources\UserCallResource;
use App\Models\UserCall;

class UserCallController extends Controller
{
    /**
     * @param UserCallRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserCallRequest $request)
    {
        $data = $request->validated();
        $user = UserCall::create($data);
        return response()->json(['user' => new UserCallResource($user)]);
    }
}

