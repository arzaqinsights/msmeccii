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
        'show_timer',
        'download_file',
        'download_btn_text'
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'builder_content' => 'array',
        'show_timer' => 'boolean',
    ];
}
