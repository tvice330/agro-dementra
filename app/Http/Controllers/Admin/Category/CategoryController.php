<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
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
        return response()->json(['categories' => $categories]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $categories = Category::find($id);
        return response()->json(['categories' => $categories]);
    }

    public function create()
    {
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $categories = Category::create($data);
        return response()->json(['categories' => $categories]);
    }

    public function edit()
    {
    }

    /**
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::find($id);
        $data = $request->validated();
        $categories->update($data);
        return response()->json(['categories' => $categories]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $categories= Category::find($id);
        $categories->delete();
        return "ok";
    }
}
