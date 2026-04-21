<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrowthRecord extends Model
{
    protected $fillable = ['group', 'category', 'sub_category', 'year', 'value', 'label', 'sort_order'];
}
