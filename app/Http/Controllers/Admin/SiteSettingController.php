<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $site = SiteSetting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('site'));
    }

    /**
     * Save all settings from the fixed-field form
     */
    public function bulkUpdate(Request $request)
    {
        $settings = $request->input('settings', []);

        foreach ($settings as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        cache()->forget('site_settings');

        return back()->with('success', 'Settings saved successfully.');
    }
}
