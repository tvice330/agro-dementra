<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActionValuesResource extends JsonResource
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
                "name" => $grade->name,
                "position" => $grade->position,
                "active" => $grade->active
            ];
        }
        return $grades;
    }
}
