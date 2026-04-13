<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'thumbnail',
        'submit_button_text',
        'thank_you_message',
        'status'
    ];

    public function fields()
    {
        return $this->hasMany(FormField::class)->orderBy('order', 'asc');
    }
}
