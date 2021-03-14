<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApiAuthController extends Controller
{
    /**
     * @param AuthRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function register (AuthRequest $request) {
        $data = $request->validated();
        $data['password']=Hash::make($data['password']);
        $data['remember_token'] = Str::random(10);
        $user = User::create($data);
        $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        $response['token'] = $token;
        return response($response, 200);
    }

    public function login (AuthRequest $request) {
        $data = $request->validated();
        $user = User::where('email',  $data->email)->first();
        if ($user) {
            if (Hash::check($data->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        }
    }

    public function logout (AuthRequest $request) {
        $data = $request->validated();
        $token = $data->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
