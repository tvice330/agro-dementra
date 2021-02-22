<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $fillable = [
        'name', 'position','active',
    ];

    public function scopeByPosition($query)
    {
        return $query->orderBy('position');
    }
}
