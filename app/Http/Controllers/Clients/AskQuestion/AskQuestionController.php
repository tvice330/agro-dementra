<?php

namespace App\Http\Controllers\Clients\AskQuestion;

use App\Http\Controllers\Controller;
use App\Http\Requests\AskRequest;
use App\Http\Resources\AskQuestionResource;
use App\Models\AskQuestion;

class AskQuestioncontroller extends Controller
{
    /**
     * @param AskRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AskRequest $request)
    {
        $data = $request->validated();
        $value = AskQuestion::create($data);
        return response()->json(['value' => new AskQuestionResource($value)]);
    }
}


