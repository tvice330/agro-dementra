<?php

namespace App\Http\Controllers\Clients\Partnership;

use App\Http\Controllers\Controller;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = Partnership::active()->byPosition()->get();
        return response()->json(['data' => $data]);
    }
}

