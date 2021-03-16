<?php

namespace App\Http\Controllers\Admin\ActionValues;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionValueRequest;
use App\Http\Resources\ActionValueOneResource;
use App\Http\Resources\ActionValuesResource;
use App\Models\ActionValue;

class ActionValuesController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $action_values = ActionValue::get();
        return response()->json(['action_values' => new ActionValuesResource($action_values)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $action_value = ActionValue::find($id);
        return response()->json(['action_value' => new ActionValueOneResource($action_value)]);
    }

    /**
     * @param ActionValueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionValueRequest $request)
    {
        $data = $request->validated();
        $action_value = ActionValue::create($data);
        return response()->json(['action_value' => new ActionValueOneResource($action_value)]);
    }

    /**
     * @param ActionValueRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionValueRequest $request, $id)
    {
        $action_value = ActionValue::find($id);
        $data = $request->validated();
        $action_value->update($data);
        return response()->json(['action_value' => new ActionValueOneResource($action_value)]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $action_value = ActionValue::find($id);
        $action_value->delete();
        return $this->index();
    }
}




