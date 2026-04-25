<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcellenceAward extends Model
{
    protected $fillable = [
        'title',
        'description',
        'award_image',
        'giver_name',
        'giver_image',
        'giver_designation',
        'order',
        'show_on_home',
        'status'
    ];

    protected $casts = [
        'show_on_home' => 'boolean',
    ];
}
