<?php

namespace App\Http\Controllers\Clients\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = Setting::get();
        return response()->json(['data' => $data]);
    }
}
