<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'title', 'active',
    ];

    public function action_values()
    {
        return $this->hasMany(ActionValue::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
