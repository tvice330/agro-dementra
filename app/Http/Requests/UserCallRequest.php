<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCallRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string:posts|max:255',
            'phone' => 'required|string:posts|max:10',
        ];
    }
    public function store(UserCallRequest $request)
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();
    }
}

