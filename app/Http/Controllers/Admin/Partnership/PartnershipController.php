<?php

namespace App\Http\Controllers\Admin\Partnership;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnershipOneResource;
use App\Http\Resources\PartnershipsResource;
use App\Models\Partnership;
use App\Http\Requests\PartnershipRequest;
use App\Traits\ResponseTrait;

class PartnershipController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $partnerships = Partnership::get();
        $response['partnerships'] = new PartnershipsResource($partnerships);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $partnership = Partnership::find($id);
        $response['partnership'] = new PartnershipOneResource($partnership);
        return self::okResponse($response);
    }

    /**
     * @param PartnershipRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PartnershipRequest $request)
    {
        $data = $request->validated();
        $partnership = Partnership::create($data);
        $response['partnership'] = new PartnershipOneResource($partnership);
        return self::okResponse($response);
    }

    /**
     * @param PartnershipRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PartnershipRequest $request, $id)
    {
        $partnership = Partnership::find($id);
        $data = $request->validated();
        $partnership->update($data);
        $response['partnership'] = new PartnershipOneResource($partnership);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $partnership = Partnership::find($id);
        $partnership->delete();
        return $this->index();
    }
}





