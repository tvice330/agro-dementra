<?php

namespace App\Http\Controllers\Admin\Action;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;
use App\Http\Resources\ActionOneResource;
use App\Http\Resources\ActionsResource;
use App\Models\Action;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $actions = Action::get();
        return response()->json(['actions' => new ActionsResource($actions)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $action = Action::find($id);
        return response()->json(['action' => new ActionOneResource($action)]);
    }

    /**
     * @param ActionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionRequest $request)
    {
        $data = $request->validated();
        $action = Action::create($data);
        return response()->json(['action' => new ActionOneResource($action)]);
    }

    /**
     * @param ActionRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionRequest $request, $id)
    {
        $action = Action::find($id);
        $data = $request->validated();
        $action->update($data);
        return response()->json(['action' => new ActionOneResource($action)]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();
        return $this->index();
    }
}


