<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamPage extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'status', 'order'];

    public function members()
    {
        return $this->hasMany(TeamMember::class)->orderBy('order');
    }
}
