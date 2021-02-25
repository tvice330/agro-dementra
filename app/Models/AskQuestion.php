<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AskQuestion extends Model
{
    protected $fillable = [
        'name', 'phone', 'message',
    ];
}
