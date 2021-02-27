<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $setting = Setting::get();
        return response()->json(['setting' => $setting]);
    }

    public function show($id)
    {
        $setting = Setting::find($id);
        return response()->json(['setting' => $setting]);
    }

    public function create()
    {
        //
    }

    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::create($data);
        return response()->json(['setting' => $setting]);
    }

    public function edit()
    {
        //
    }

    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::find($id);
        $data = $request->all();
        $setting->update($data);
        return response()->json(['setting' => $setting]);
    }

    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return "ok";
    }
}






