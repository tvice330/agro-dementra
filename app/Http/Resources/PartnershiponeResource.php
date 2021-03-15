<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartnershiponeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "second_name" => $this->second_name,
            "position" => $this->position,
            "active" => $this->active
        ];

    }
}

