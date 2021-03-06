<?php

namespace App\Http\Controllers\Admin\Partnership;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Http\Requests\PartnershipRequest;

class PartnershipController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $partnerships = Partnership::get();
        return response()->json(['partnerships' => $partnerships]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $partnership = Partnership::find($id);
        return response()->json(['partnership' => $partnership]);
    }

    public function create()
    {
    }

    /**
     * @param PartnershipRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PartnershipRequest $request)
    {
        $data = $request->validated();
        $partnership = Partnership::create($data);
        return response()->json(['partnership' => $partnership]);
    }

    public function edit()
    {
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
        $partnership ->update($data);
        return response()->json(['partnership' => $partnership]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $partnership = Partnership::find($id);
        $partnership->delete();
        return "ok";
    }
}





