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
        return response()->json(['setting' => $setting]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $settings = Setting::find($id);
        return response()->json(['setting' => $settings]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param SettingRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SettingRequest $request)
    {
        $data = $request->validated();
        $settings = Setting::create($data);
        return response()->json(['setting' => $settings]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param SettingRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SettingRequest $request, $id)
    {
        $settings = Setting::find($id);
        $data = $request->all();
        $settings->update($data);
        return response()->json(['setting' => $settings]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $settings = Setting::find($id);
        $settings->delete();
        return "ok";
    }
}






