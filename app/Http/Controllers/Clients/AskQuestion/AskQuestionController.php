<?php

namespace App\Http\Controllers\Clients\AskQuestion;

use App\Http\Controllers\Controller;
use App\Http\Requests\AskRequest;
use App\Models\AskQuestion;

class AskQuestioncontroller extends Controller
{
    public function store(AskRequest $request)
    {
        $data = $request->validated();
        $ask = AskQuestion::create($data);
        return $ask;
    }
}


