<?php

namespace App\Http\Controllers\Clients\CompanyDescription;

use App\Http\Controllers\Controller;
use App\Models\CompanyDescription;

class CompanyDescriptionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $company_description = CompanyDescription::get();
        return response()->json(['company_description' => $company_description]);
    }
}
