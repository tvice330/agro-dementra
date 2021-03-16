<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuOneResource;
use App\Http\Resources\MenusResource;
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
        return response()->json(['menus' => new MenusResource($menus)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return response()->json(['menu' => new MenuOneResource($menu)]);
    }

    /**
     * @param MenuRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        $menu = Menu::create($data);
        return response()->json(['menu' => new MenuOneResource($menu)]);
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
        return response()->json(['menu' => new MenuOneResource($menu)]);
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return $this->index();
    }
}


