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
        'status',
        'invoice_prefix',
        'invoice_details'
    ];

    protected $casts = [
        'invoice_details' => 'array'
    ];

    public function fields()
    {
        return $this->hasMany(FormField::class)->orderBy('order', 'asc');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
