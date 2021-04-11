<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionValue extends Model
{
    protected $fillable = [
        'name', 'active', 'action_id', 'position',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}
