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
        return response()->json(['action' => $actions]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $actions = Action::find($id);
        return response()->json(['action' =>$actions]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param ActionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionRequest $request)
    {
        $data = $request->validated();
        $actions = Action::create($data);
        return response()->json(['action' =>$actions]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param ActionRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionRequest $request, $id)
    {
        $actions = Action::find($id);
        $data = $request->validated();
        $actions->update($data);
        return response()->json(['action' =>$actions]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $actions = Action::find($id);
        $actions->delete();
        return "ok";
    }
}


