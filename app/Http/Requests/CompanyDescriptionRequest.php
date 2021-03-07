<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyDescriptionRequest extends FormRequest
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
            'title' => 'required|text',
            'count_years' => 'required|integer',
            'description_years' => 'required|string',
            'count_regions' => 'required|integer',
            'description_regions' => 'required|string',
            'description' => 'required|text',
            'image' => 'required|string',
        ];
    }
}
