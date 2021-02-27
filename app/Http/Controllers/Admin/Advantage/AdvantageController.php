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
        $advantage = Advantage::get();
        return response()->json(['advantage' => $advantage]);
    }

    public function show($id)
    {
        $advantage = Advantage::find($id);
        return response()->json(['advantage' => $advantage]);
    }

    public function create()
    {
        //
    }

    public function store(AdvantageRequest $request)
    {
        $data = $request->validated();
        $advantage = Advantage::create($data);
        return response()->json(['advantage' => $advantage]);
    }

    public function edit()
    {
        //
    }

    public function Update(AdvantageRequest $request, $id)
    {
        $advantage = Advantage::find($id);
        $data = $request->all();
        $advantage->update($data);
        return response()->json(['advantage' => $advantage]);
    }

    public function destroy($id)
    {
        $advantage = Advantage::find($id);
        $advantage->delete();
        return "ok";
    }
}

