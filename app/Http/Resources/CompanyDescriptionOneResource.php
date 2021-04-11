<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyDescriptionOneResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "count_years" => $this->count_years,
            "description_years" => $this->description_years,
            "count_regions" => $this->count_regions,
            "description_regions" => $this->description_regions,
            "description" => $this->description,
            "image" => $this->image,
        ];
    }
}
