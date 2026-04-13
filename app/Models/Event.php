<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'event_date',
        'location',
        'image',
        'design_style',
        'builder_content',
        'status',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'builder_content' => 'array',
    ];
}
