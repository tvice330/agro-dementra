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
        $partnership = Partnership::get();
        return response()->json(['partnership' => $partnership]);
    }

    public function show($id)
    {
        $partnership = Partnership::find($id);
        return response()->json(['partnership' => $partnership]);
    }

    public function create()
    {
        //
    }

    public function store(PartnershipRequest $request)
    {
        $data = $request->validated();
        $partnership = Partnership::create($data);
        return response()->json(['partnership' => $partnership]);
    }

    public function edit()
    {
        //
    }

    public function update(PartnershipRequest $request, $id)
    {
        $partnership = Partnership::find($id);
        $data = $request->all();
        $partnership->update($data);
        return response()->json(['partnership' => $partnership]);
    }

    public function destroy($id)
    {
        $partnership = Partnership::find($id);
        $partnership->delete();
        return "ok";
    }
}





