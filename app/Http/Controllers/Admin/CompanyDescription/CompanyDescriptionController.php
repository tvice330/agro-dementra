<?php

namespace App\Http\Controllers\Admin\CompanyDescription;

use App\Http\Controllers\Controller;
use App\Models\CompanyDescription;
use App\Http\Requests\CompanyDescriptionRequest;

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

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $company_description = CompanyDescription::find($id);
        return response()->json(['company_description' => $company_description]);
    }

    public function create()
    {
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CompanyDescriptionRequest $request)
    {
        $data = $request->validated();
        $company_description = CompanyDescription::create($data);
        return response()->json(['company_description' => $company_description]);
    }

    public function edit()
    {
    }

    /**
     * @param CompanyDescriptionRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CompanyDescriptionRequest $request, $id)
    {
        $company_description = CompanyDescription::find($id);
        $data = $request->validated();
        $company_description->update($data);
        return response()->json(['company_description' => $company_description]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $company_description = CompanyDescription::find($id);
        $company_description->delete();
        return "ok";
    }
}
