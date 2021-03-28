<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoneResource;
use App\Http\Resources\ProductsResource;
use App\Models\Product;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::get();
        $response['products'] = new ProductsResource($products);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $product = Product::find($id);
        $response['product'] = new ProductoneResource( $product);
        return self::okResponse($response);
    }

    /**
     * @param ActionValueRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ActionValueRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        $response['product'] = new ProductoneResource( $product);
        return self::okResponse($response);
    }

    /**
     * @param ActionValueRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ActionValueRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->validated();
        $product->update($data);
        $response['product'] = new ProductoneResource( $product);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $this->index();
    }
}
