<?php

namespace App\Http\Controllers\Admin\Action;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;
use App\Http\Resources\ActionOneResource;
use App\Http\Resources\ActionsResource;
use App\Traits\ResponseTrait;
use App\Models\Action;

class ActionController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $actions = Action::get();
        $response['actions'] = new ActionsResource($actions);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $action = Action::find($id);
        $response['action'] = new ActionOneResource($action);
        return self::okResponse($response);
    }

    /**
     * @param ActionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionRequest $request)
    {
        $data = $request->validated();
        $action = Action::create($data);
        $response['action'] = new ActionOneResource($action);
        return self::okResponse($response);
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
        $response['action'] = new ActionOneResource($action);
        return self::okResponse($response);
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


