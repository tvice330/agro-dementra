<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $grades = [];
        foreach ($this->resource as $grade) {
            $grades[] = [
                "title" => $grade->title,
                'active' => $grade->active
            ];
        }
        return $grades;
    }
}

