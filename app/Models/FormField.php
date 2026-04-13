<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $fillable = [
        'form_id',
        'field_identifier',
        'label',
        'type',
        'placeholder',
        'is_required',
        'options',
        'depends_on',
        'depends_on_value',
        'base_amount',
        'tax_percentage',
        'order',
    ];

    protected $casts = [
        'is_required' => 'boolean',
        'options' => 'array',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
