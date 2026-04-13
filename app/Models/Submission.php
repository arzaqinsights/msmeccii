<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'user_id',
        'form_id',
        'award_category_id',
        'data',
        'total_amount_paid',
        'payment_status',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function form() {
        return $this->belongsTo(Form::class);
    }
}
