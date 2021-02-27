<?php

namespace App\Http\Controllers\Admin\ActionValue;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActionValueRequest;
use App\Models\ActionValue;

class ActionController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $action = ActionValue::get();
        return response()->json(['action' => $action]);
    }

    public function show($id)
    {
        $action = ActionValue::find($id);
        return response()->json(['action' => $action]);
    }

    public function create()
    {
        //
    }

    public function store(ActionValueRequest $request)
    {
        $data = $request->validated();
        $action = ActionValue::create($data);
        return response()->json(['action' => $action]);
    }

    public function edit()
    {
        //
    }

    public function Update(ActionValueRequest $request, $id)
    {
        $action = ActionValue::find($id);
        $data = $request->all();
        $action->update($data);
        return response()->json(['action' => $action]);
    }

    public function destroy($id)
    {
        $action = ActionValue::find($id);
        $action->delete();
        return "ok";
    }
}



