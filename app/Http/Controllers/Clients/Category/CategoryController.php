<?php

namespace App\Http\Controllers\Clients\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = Category::active()->byPosition()->get();
        return response()->json(['data' => $data]);
    }
}

