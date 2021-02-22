<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name', 'position','active',
    ];

    public function scopeByPosition($query)
    {
        return $query->orderBy('position');
    }
}
