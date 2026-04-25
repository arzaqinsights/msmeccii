<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ExcellenceAward;
use Illuminate\Http\Request;

class ExcellenceController extends Controller
{
    public function index()
    {
        $awards = ExcellenceAward::where('status', 'published')
            ->orderBy('order')
            ->paginate(12);
            
        return view('website.excellence.index', compact('awards'));
    }
}
