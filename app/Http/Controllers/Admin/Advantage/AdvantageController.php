<?php

namespace App\Http\Controllers\Admin\Advantage;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvantagesResource;
use App\Http\Resources\AdvantegeOneResource;
use App\Models\Advantage;
use App\Http\Requests\AdvantageRequest;
use App\Http\Traits\ResponseTrait;


class AdvantageController extends Controller
{
    use ResponseTrait;

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $advantages = Advantage::get();
        $response['advantages'] = new AdvantagesResource($advantages);
        return self::okResponse($response);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $advantage = Advantage::find($id);
        if ($advantage) {
            $response['advantage'] = new AdvantegeOneResource($advantage);
            return self::okResponse($response);
        }
        return self::notFoundResponse();
    }

    /**
     * @param AdvantageRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AdvantageRequest $request)
    {
        $data = $request->validated();
        $advantage = Advantage::create($data);
        $response['advantage'] = new AdvantegeOneResource($advantage);
        return self::okResponse($response);
    }

    /**
     * @param AdvantageRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AdvantageRequest $request, $id)
    {
        $advantage = Advantage::find($id);
        if ($advantage) {
            $data = $request->validated();
            $advantage->update($data);
            $response['advantage'] = new AdvantegeOneResource($advantage);
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
        $advantage = Advantage::find($id);
        if ($advantage) {
            $advantage->delete();
            return $this->index();
        }
        return self::notFoundResponse();
    }
}

