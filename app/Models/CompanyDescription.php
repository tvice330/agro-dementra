<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDescription extends Model
{
    protected $fillable = [
        'title', 'count_years', 'description_years', 'count_regions', 'description_regions', 'description', 'image',
    ];
}
