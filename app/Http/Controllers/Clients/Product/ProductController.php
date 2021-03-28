<?php

namespace App\Http\Controllers\Clients\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $values = Product::active()->byPosition()->get();
        return response()->json(['values' => new ProductsResource($values)]);
    }
}
