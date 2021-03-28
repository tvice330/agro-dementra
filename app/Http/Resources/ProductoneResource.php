<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoneResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "price" => $this->price,
            "description" => $this->description,
            "active" => $this->active,
            "position" => $this->position,
            "category_id" => $this->category_id,
            "conditions" => $this->conditions,
            "image" => $this->image,
        ];
    }
}
