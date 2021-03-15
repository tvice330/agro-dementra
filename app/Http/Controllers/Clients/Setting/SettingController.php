<?php

namespace App\Http\Controllers\Clients\Setting;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingsResource;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values= Setting::get();
        return response()->json(['values' => new SettingsResource($values)]);
    }
}
