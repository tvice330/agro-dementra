<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingOneResource;
use App\Http\Resources\SettingsResource;
use App\Models\Setting;
use App\Http\Requests\SettingRequest;
use App\Traits\ResponseTrait;

class SettingController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $settings = Setting::get();
        $response['settings'] = new SettingsResource($settings);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $setting = Setting::find($id);
        if($setting) {
            $response['setting'] = new SettingOneResource($setting);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param SettingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::create($data);
        $response['setting'] = new SettingOneResource($setting);
        return self::okResponse($response);
    }

    /**
     * @param SettingRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SettingRequest $request, $id)
    {
        $setting = Setting::find($id);
        if($setting) {
            $data = $request->validated();
            $setting->update($data);
            $response['setting'] = new SettingOneResource($setting);
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
        $setting = Setting::find($id);
        if($setting) {
            $setting->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}






