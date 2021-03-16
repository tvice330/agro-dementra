<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryOneResource;
use App\Http\Resources\CategoriesResource;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categories = Category::get();
        return response()->json(['categories' => new CategoriesResource($categories)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $category = Category::find($id);
        return response()->json(['category' => new CategoryOneResource($category)]);
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $category = Category::create($data);
        return response()->json(['category' => new CategoryOneResource($category)]);
    }

    /**
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $data = $request->validated();
        $category->update($data);
        return response()->json(['category' => new CategoryOneResource($category)]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return $this->index();
    }
}
