<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'user_id',
        'form_id',
        'award_category_id',
        'invoice_template_id',
        'data',
        'items',
        'total_amount_paid',
        'payment_status',
        'manual_invoice_number',
    ];

    public function invoiceTemplate()
    {
        return $this->belongsTo(InvoiceTemplate::class);
    }

    protected $casts = [
        'data' => 'array',
        'items' => 'array',
        'total_amount_paid' => 'decimal:2',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function form() {
        return $this->belongsTo(Form::class);
    }

    public function awardCategory()
    {
        return $this->belongsTo(AwardCategory::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }

    public function getInvoiceNumberAttribute()
    {
        $prefix = $this->form->invoice_prefix ?? 'MSME-';
        return $prefix . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }
}
