<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionValue extends Model
{
    protected $fillable = [
        'name', 'active', 'action_id',
    ];

    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
