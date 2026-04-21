<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class SectorController extends Controller
{
    public function index()
    {
        return view('website.sectors.index');
    }

    public function show($slug)
    {
        return view('website.sectors.' . $slug);
    }
}
