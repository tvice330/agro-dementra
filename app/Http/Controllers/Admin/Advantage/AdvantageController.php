<?php

namespace App\Http\Controllers\Admin\Advantage;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Http\Requests\AdvantageRequest;

class AdvantageController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $advantages = Advantage::get();
        return response()->json(['advantage' => $advantages]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $advantages = Advantage::find($id);
        return response()->json(['advantage' => $advantages]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param AdvantageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AdvantageRequest $request)
    {
        $data = $request->validated();
        $advantages = Advantage::create($data);
        return response()->json(['advantage' => $advantages]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param AdvantageRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdvantageRequest $request, $id)
    {
        $advantages = Advantage::find($id);
        $data = $request->validated();
        $advantages->update($data);
        return response()->json(['advantage' => $advantages]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $advantages = Advantage::find($id);
        $advantages->delete();
        return "ok";
    }
}

