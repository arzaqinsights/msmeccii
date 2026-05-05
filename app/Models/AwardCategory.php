<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AwardCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status',
        'form_id',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function getNameAttribute()
    {
        return $this->title;
    }
}
