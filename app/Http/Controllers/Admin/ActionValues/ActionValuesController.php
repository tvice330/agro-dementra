<?php

namespace App\Http\Controllers\Admin\ActionValues;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionValueRequest;
use App\Models\ActionValue;

class ActionValuesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $actions = ActionValue::get();
        return response()->json(['action' => $actions]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $actions = ActionValue::find($id);
        return response()->json(['action' => $actions]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param ActionValueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionValueRequest $request)
    {
        $data = $request->validated();
        $actions = ActionValue::create($data);
        return response()->json(['action' => $actions]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param ActionValueRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionValueRequest $request, $id)
    {
        $actions = ActionValue::find($id);
        $data = $request->validated();
        $actions->update($data);
        return response()->json(['action' => $actions]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $actions = ActionValue::find($id);
        $actions->delete();
        return "ok";
    }
}




