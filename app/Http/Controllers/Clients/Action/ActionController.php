<?php

namespace App\Http\Controllers\Clients\Action;

use App\Http\Controllers\Controller;
use App\Models\Action;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = Action::with('action_values')->get();
        return response()->json(['data' => $data]);
    }
}


