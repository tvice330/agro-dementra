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
        $settings = Setting::get();
        return response()->json(['settings' => $settings]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        return response()->json(['setting' => $setting]);
    }

    public function create()
    {
    }

    /**
     * @param SettingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::create($data);
        return response()->json(['setting' => $setting]);
    }

    public function edit()
    {
    }

    /**
     * @param SettingRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::find($id);
        $data = $request->all();
        $setting->update($data);
        return response()->json(['setting' => $setting]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return "ok";
    }
}






