<?php

namespace App\Http\Controllers\Clients\Action;

use App\Http\Controllers\Controller;

use App\Http\Resources\Client\ActionResource;
use App\Models\Action;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values = Action::with('action_values')->get();
        return response()->json(['values' => new ActionResource($values)]);
    }
}


