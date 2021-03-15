<?php

namespace App\Http\Controllers\Clients\CompanyDescription;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyDescriptionsResource;
use App\Models\CompanyDescription;

class CompanyDescriptionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $company_descriptions = CompanyDescription::get();
        return response()->json(['company_descriptions' => new CompanyDescriptionsResource($company_descriptions)]);
    }
}
