<?php

namespace App\Http\Controllers\Clients\Advantage;

use App\Http\Controllers\Controller;
use App\Models\Advantage;

class AdvantageController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = Advantage::active()->byPosition()->get();
        return response()->json(['data' => $data]);
    }
}

