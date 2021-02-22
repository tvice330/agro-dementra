<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
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
