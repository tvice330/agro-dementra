<?php

namespace App\Http\Controllers\Clients\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values = Category::active()->byPosition()->get();
        return response()->json(['values' => new CategoriesResource($values)]);
    }
}

