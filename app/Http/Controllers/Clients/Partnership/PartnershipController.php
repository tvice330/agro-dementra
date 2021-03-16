<?php

namespace App\Http\Controllers\Clients\Partnership;

use App\Http\Controllers\Controller;
use App\Http\Resources\PartnershipsResource;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values = Partnership::active()->byPosition()->get();
        return response()->json(['values' => new PartnershipsResource($values)]);
    }
}

