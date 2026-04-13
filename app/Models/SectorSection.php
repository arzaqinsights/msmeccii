<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectorSection extends Model
{
    protected $fillable = [
        'sector_id',
        'type',
        'content',
        'order',
    ];

    protected $casts = [
        'content' => 'array',
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
