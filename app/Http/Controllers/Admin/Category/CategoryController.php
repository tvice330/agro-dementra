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
        $categoryies = Category::get();
        return response()->json(['category' => $categoryies]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $categoryies = Category::find($id);
        return response()->json(['category' => $categoryies]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param CategoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $categoryies = Category::create($data);
        return response()->json(['category' => $categoryies]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param CategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CategoryRequest $request, $id)
    {
        $categoryies = Category::find($id);
        $data = $request->validated();
        $categoryies->update($data);
        return response()->json(['category' => $categoryies]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $categoryies = Category::find($id);
        $categoryies->delete();
        return "ok";
    }
}
