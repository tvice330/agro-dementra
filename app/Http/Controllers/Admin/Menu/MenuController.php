<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;
class MenuController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $menus = Menu::get();
        return response()->json(['menu' => $menus]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $menus = Menu::find($id);
        return response()->json(['menu' => $menus]);
    }

    /**
     *
     */
    public function create()
    {
        //
    }

    /**
     * @param MenuRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        $menus = Menu::create($data);
        return response()->json(['menu' => $menus]);
    }

    /**
     *
     */
    public function edit()
    {
        //
    }

    /**
     * @param MenuRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MenuRequest $request, $id)
    {
        $menus = Menu::find($id);
        $data = $request->validated();
        $menus->update($data);
        return response()->json(['menu' => $menus]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $menus = Menu::find($id);
        $menus->delete();
        return "ok";
    }
}


