<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'short_description',
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
        'download_btn_text',
        'end_date',
        'show_as_popup'
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'end_date' => 'datetime',
        'builder_content' => 'array',
        'show_timer' => 'boolean',
        'show_as_popup' => 'boolean',
    ];
}
