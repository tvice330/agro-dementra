<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
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
                "price" => $grade->price,
                "description" => $grade->description,
                "active" => $grade->active,
                "position" => $grade->position,
                "category_id" => $grade->category_id,
                "conditions" => $grade->conditions,
                "image" => $grade->image,
            ];
        }
        return $grades;
    }
}

