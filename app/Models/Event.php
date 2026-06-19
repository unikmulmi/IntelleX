<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'event_datetime',
        'status',
    ];

    protected $casts = [
        'event_datetime' => 'datetime',
    ];
}
