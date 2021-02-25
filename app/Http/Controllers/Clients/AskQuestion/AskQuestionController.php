<?php

namespace App\Http\Controllers\Clients\AskQuestion;

use App\Http\Controllers\Controller;
use App\Models\AskQuestion;
use Illuminate\Http\Request;

class AskQuestioncontroller extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $ask = AskQuestion::create($data);
        return $ask;
    }
}


