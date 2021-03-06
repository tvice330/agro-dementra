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
        return response()->json(['advantages' => $advantages]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $advantage = Advantage::find($id);
        return response()->json(['advantage' => $advantage]);
    }

    public function create()
    {
    }

    /**
     * @param AdvantageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AdvantageRequest $request)
    {
        $data = $request->validated();
        $advantage = Advantage::create($data);
        return response()->json(['advantage' => $advantage]);
    }


    public function edit()
    {
    }

    /**
     * @param AdvantageRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdvantageRequest $request, $id)
    {
        $advantage = Advantage::find($id);
        $data = $request->validated();
        $advantage->update($data);
        return response()->json(['advantage' => $advantage]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $advantage = Advantage::find($id);
        $advantage->delete();
        return "ok";
    }
}

