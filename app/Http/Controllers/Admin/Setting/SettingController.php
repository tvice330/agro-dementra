<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingOneResource;
use App\Http\Resources\SettingsResource;
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
        return response()->json(['settings' => new SettingsResource($settings)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        return response()->json(['setting' => new SettingOneResource($setting)]);
    }

    /**
     * @param SettingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::create($data);
        return response()->json(['setting' => new SettingOneResource($setting)]);
    }

    /**
     * @param SettingRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::find($id);
        $data = $request->validated();
        $setting->update($data);
        return response()->json(['setting' => new SettingOneResource($setting)]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return $this->index();
    }
}






