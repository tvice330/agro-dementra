<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|integer',
            'position' => 'required|integer',
            'description' => 'required',
            'active' => 'required|boolean',
            'category_id' => 'required|exists:categories,id',
             'conditions' => 'required|string',
            'image' => 'required|string',
        ];
    }
}

