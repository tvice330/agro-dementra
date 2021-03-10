<?php

namespace App\Http\Controllers\Clients\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values= Menu::active()->byPosition()->get();
        return response()->json(['values' => $values]);
    }
}
