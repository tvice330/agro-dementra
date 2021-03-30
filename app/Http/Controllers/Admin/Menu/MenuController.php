<?php

namespace App\Http\Controllers\Admin\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuOneResource;
use App\Http\Resources\MenusResource;
use App\Http\Traits\ResponseTrait;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $menus = Menu::get();
        $response['menus'] = new MenusResource($menus);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $response['menu'] = new MenuOneResource($menu);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param MenuRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(MenuRequest $request)
    {
        $data = $request->validated();
        $menu = Menu::create($data);
        $response['menu'] = new MenuOneResource($menu);
        return self::okResponse($response);
    }

    /**
     * @param MenuRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(MenuRequest $request, $id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $data = $request->validated();
            $menu->update($data);
            $response['menu'] = new MenuOneResource($menu);
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
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}


