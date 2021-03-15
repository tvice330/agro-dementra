<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyDescriptionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $grades = [];
        foreach ($this->resource as $grade) {
            $grades[] = [
                "title" => $grade->title,
                "count_years" => $grade->count_years,
                "description_years" => $grade->description_years,
                "count_regions" => $grade->count_regions,
                "description_regions" => $grade->description_regions,
                "description" => $grade->description,
                "image" => $grade->image,
            ];
        }
        return $grades;

    }
}

