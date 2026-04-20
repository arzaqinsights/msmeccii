<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceTemplate extends Model
{
    protected $fillable = ['name', 'config', 'is_default'];

    protected $casts = [
        'config' => 'array',
        'is_default' => 'boolean'
    ];

    public function forms()
    {
        return $this->hasMany(Form::class);
    }
}
