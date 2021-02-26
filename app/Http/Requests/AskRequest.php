<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string:posts|max:255',
            'phone' => 'required|string:posts|max:10',
            'message' => 'required',
        ];
    }
    public function store(AskRequest $request)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();
    }
}
