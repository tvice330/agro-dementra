<?php

namespace App\Http\Controllers\Admin\Action;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionRequest;
use App\Models\Action;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $actions = Action::get();
        return response()->json(['actions' => $actions]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $action = Action::find($id);
        return response()->json(['action' =>$action]);
    }

    /**
     * @param ActionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionRequest $request)
    {
        $data = $request->validated();
        $actions = Action::create($data);
        return response()->json(['actions' =>$actions]);
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
        return response()->json(['action' =>$action]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $action  = Action::find($id);
        $action->delete();
        return "ok";
    }
}


