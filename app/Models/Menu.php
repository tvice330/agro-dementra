<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'position', 'active', 'alias'
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
