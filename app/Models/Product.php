<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'active', 'position', 'category_id','conditions', 'image',
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeByPosition($query)
    {
        return $query->orderBy('position');
    }
}
