<?php

namespace App\Http\Controllers\Admin\CompanyDescription;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyDescriptionOneResource;
use App\Http\Resources\CompanyDescriptionsResource;
use App\Models\CompanyDescription;
use App\Http\Requests\CompanyDescriptionRequest;
use App\Http\Traits\ResponseTrait;

class CompanyDescriptionController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $company_descriptions = CompanyDescription::get();
        $response['company_descriptions'] = new CompanyDescriptionsResource($company_descriptions);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $company_description = CompanyDescription::find($id);
        if ($company_description) {
            $response['company_description'] = new CompanyDescriptionOneResource($company_description);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CompanyDescriptionRequest $request)
    {
        $data = $request->validated();
        $company_description = CompanyDescription::create($data);
        $response['company_description'] = new CompanyDescriptionOneResource($company_description);
        return self::okResponse($response);
    }

    /**
     * @param CompanyDescriptionRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CompanyDescriptionRequest $request, $id)
    {
        $company_description = CompanyDescription::find($id);
        if ($company_description) {
            $data = $request->validated();
            $company_description->update($data);
            $response['company_description'] = new CompanyDescriptionOneResource($company_description);
            return self::okResponse($response);
        }
        return self::notFoundResponse();

    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $company_description = CompanyDescription::find($id);
        if ($company_description) {
            $company_description->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}
