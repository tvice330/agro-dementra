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
        $action = Action::get();
        return response()->json(['action' => $action]);
    }

    public function show($id)
    {
        $action = Action::find($id);
        return response()->json(['action' =>$action]);
    }

    public function create()
    {
        //
    }

    public function store(ActionRequest $request)
    {
        $data = $request->validated();
        $action = Action::create($data);
        return response()->json(['action' =>$action]);
    }

    public function edit()
    {
        //
    }

    public function Update(ActionRequest $request, $id)
    {
        $action = Action::find($id);
        $data = $request->all();
        $action->update($data);
        return response()->json(['action' =>$action]);
    }

    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();
        return "ok";
    }
}


