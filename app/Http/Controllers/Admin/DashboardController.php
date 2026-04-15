<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Event;
use App\Models\Form;
use App\Models\SiteSetting;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'settings' => SiteSetting::count(),
            'forms'    => Form::count(),
            'events'   => Event::count(),
            'users'    => User::count(),
        ];

        $gaId = config('services.google.analytics_id');

        return view('admin.dashboard', compact('stats', 'gaId'));
    }
}
