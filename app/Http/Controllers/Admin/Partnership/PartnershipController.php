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
        return response()->json(['partnership' => $partnerships]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $partnerships = Partnership::find($id);
        return response()->json(['partnership' => $partnerships]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param PartnershipRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PartnershipRequest $request)
    {
        $data = $request->validated();
        $partnerships = Partnership::create($data);
        return response()->json(['partnership' => $partnerships]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param PartnershipRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PartnershipRequest $request, $id)
    {
        $partnerships = Partnership::find($id);
        $data = $request->validated();
        $partnerships ->update($data);
        return response()->json(['partnership' => $partnerships]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $partnerships = Partnership::find($id);
        $partnerships->delete();
        return "ok";
    }
}





