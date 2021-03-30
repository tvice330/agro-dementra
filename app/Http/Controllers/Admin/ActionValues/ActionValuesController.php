<?php

namespace App\Http\Controllers\Admin\ActionValues;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionValueRequest;
use App\Http\Resources\ActionValueOneResource;
use App\Http\Resources\ActionValuesResource;
use App\Models\ActionValue;
use App\Http\Traits\ResponseTrait;

class ActionValuesController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $action_values = ActionValue::get();
        $response['action_values'] = new ActionValuesResource($action_values);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $action_value = ActionValue::find($id);
        if ($action_value) {
            $response['action_value'] = new ActionValueOneResource($action_value);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param ActionValueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionValueRequest $request)
    {
        $data = $request->validated();
        $action_value = ActionValue::create($data);
        $response['action_value'] = new ActionValueOneResource($action_value);
        return self::okResponse($response);
    }

    /**
     * @param ActionValueRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionValueRequest $request, $id)
    {
        $action_value = ActionValue::find($id);
        if ($action_value) {
            $data = $request->validated();
            $action_value->update($data);
            $response['action_value'] = new ActionValueOneResource($action_value);
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
        $action_value = ActionValue::find($id);
        if ($action_value) {
            $action_value->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}




