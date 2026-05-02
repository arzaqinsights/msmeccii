<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        try {
            if (Schema::hasTable('site_settings')) {
                $settings = SiteSetting::whereIn('key', [
                    'mail_host', 'mail_port', 'mail_username', 'mail_password', 
                    'mail_encryption', 'mail_from_address', 'mail_from_name'
                ])->pluck('value', 'key');

                if ($settings->get('mail_host')) {
                    Config::set('mail.default', 'smtp');
                    Config::set('mail.mailers.smtp.host', $settings->get('mail_host'));
                    Config::set('mail.mailers.smtp.port', $settings->get('mail_port', 587));
                    Config::set('mail.mailers.smtp.username', $settings->get('mail_username'));
                    Config::set('mail.mailers.smtp.password', $settings->get('mail_password'));
                    Config::set('mail.mailers.smtp.encryption', $settings->get('mail_encryption', 'tls'));
                    
                    Config::set('mail.from.address', $settings->get('mail_from_address', Config::get('mail.from.address')));
                    Config::set('mail.from.name', $settings->get('mail_from_name', Config::get('mail.from.name')));
                }
            }
        } catch (\Exception $e) {
            // Silently fail if DB is not ready
        }
    }
}
