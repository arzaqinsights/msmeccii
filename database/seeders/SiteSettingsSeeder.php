<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [
            'phone_1' => '+91-9810690843',
            'phone_2' => '',
            'phone_3' => '',
            'email_1' => 'support@msmeccii.in',
            'email_2' => '',
            'address' => "India's MSME Headquarters\nNew Delhi, India",
            'facebook_url' => 'https://facebook.com/msmeccii',
            'twitter_url' => 'https://twitter.com/msmeccii',
            'instagram_url' => 'https://instagram.com/msmeccii',
            'linkedin_url' => 'https://linkedin.com/company/msmeccii',
            'youtube_url' => 'https://youtube.com/@msmeccii',
            'whatsapp_url' => 'https://wa.me/919810690843',
        ];

        foreach ($defaults as $key => $value) {
            SiteSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
