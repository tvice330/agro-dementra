<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryOneResource;
use App\Http\Resources\CategoriesResource;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Traits\ResponseTrait;

class CategoryController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categories = Category::get();
        $response['categories'] = new CategoriesResource($categories);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $category = Category::find($id);
        if ($category) {
            $response['category'] = new CategoryOneResource($category);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $category = Category::create($data);
        $response['category'] = new CategoryOneResource($category);
        return self::okResponse($response);
    }

    /**
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if ($category) {
            $data = $request->validated();
            $category->update($data);
            $response['category'] = new CategoryOneResource($category);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}
