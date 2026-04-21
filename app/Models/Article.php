<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'author', 'thumbnail', 
        'content', 'excerpt', 'meta_title', 'meta_description', 
        'is_published', 'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getThumbnailUrlAttribute()
    {
        if (!$this->thumbnail) {
            return asset('assets/images/placeholder.jpg');
        }

        if (filter_var($this->thumbnail, FILTER_VALIDATE_URL)) {
            return $this->thumbnail;
        }

        return asset('storage/' . $this->thumbnail);
    }
}
