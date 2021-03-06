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
        return response()->json(['menus' => $menus]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return response()->json(['menu' => $menu]);
    }

    public function create()
    {
    }

    /**
     * @param MenuRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        $menu = Menu::create($data);
        return response()->json(['menu' => $menu]);
    }

    public function edit()
    {
    }

    /**
     * @param MenuRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::find($id);
        $data = $request->validated();
        $menu->update($data);
        return response()->json(['menu' => $menu]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return "ok";
    }
}


