<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'position', 'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeByPosition($query)
    {
        return $query->orderBy('position');
    }
}

