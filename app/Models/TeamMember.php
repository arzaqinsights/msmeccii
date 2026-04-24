<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'team_page_id', 
        'name', 
        'image', 
        'company_name', 
        'designation', 
        'description', 
        'social_links', 
        'order'
    ];

    protected $casts = [
        'social_links' => 'array'
    ];

    public function teamPage()
    {
        return $this->belongsTo(TeamPage::class);
    }
}
