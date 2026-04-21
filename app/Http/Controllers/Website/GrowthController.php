<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\GrowthRecord;
use Illuminate\Http\Request;

class GrowthController extends Controller
{
    public function index()
    {
        $delegates = GrowthRecord::where('group', 'conference')->where('category', 'delegates')->orderBy('year')->get();
        $speakers = GrowthRecord::where('group', 'conference')->where('category', 'speakers')->orderBy('year')->get();
        $excellence = GrowthRecord::where('group', 'conference')->where('category', 'excellence')->orderBy('year')->get();
        
        $awards = GrowthRecord::where('group', 'award')->get()->groupBy('sub_category');

        return view('website.growth.index', compact('delegates', 'speakers', 'excellence', 'awards'));
    }
}
