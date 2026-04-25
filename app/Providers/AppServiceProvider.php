<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::share('site', cache()->remember('site_settings', 60 * 24, function () {
            return \App\Models\SiteSetting::pluck('value', 'key')->toArray();
        }));

        \Illuminate\Support\Facades\View::share('menu', cache()->remember('website_menu', 60 * 24, function () {
            return [
                ['name' => 'HOME', 'route' => 'home', 'active' => '/'],
                [
                    'name' => 'ABOUT',
                    'route' => 'about.what_is',
                    'active' => 'about',
                    'sub_menu' => [
                        ['name' => 'What is MSMECCII', 'route' => 'about.what_is', 'active' => 'about/what-is-msmeccii'],
                        ['name' => 'Global Chairman', 'route' => 'about.chairman', 'active' => 'about/chairman'],
                        ['name' => 'Core Leadership', 'route' => 'about.leadership', 'active' => 'about/leadership'],
                        ['name' => 'Wall of Excellence', 'route' => 'excellence.index', 'active' => 'wall-of-excellence'],
                    ]
                ],
                [
                    'name' => 'JOIN US',
                    'route' => 'join.index',
                    'active' => 'join',
                    'sub_menu' => \App\Models\Form::where('status', 'published')->get()->map(function ($form) {
                        return [
                            'name' => $form->name,
                            'route' => 'join.forms.show',
                            'slug' => $form->slug,
                            'active' => 'join/application/' . $form->slug
                        ];
                    })->toArray()
                ],
                [
                    'name' => 'SECTORS',
                    'route' => 'sectors.index',
                    'active' => 'sectors',
                    'mega' => true,
                    'sub_menu' => config('sectors.sectors')
                ],
                ['name' => 'EVENTS & AWARDS', 'route' => 'events.index', 'active' => 'events'],
                ['name' => 'BLOG & NEWS', 'route' => 'blog.index', 'active' => 'blog'],
                ['name' => 'GALLERY', 'route' => 'gallery', 'active' => 'gallery'],
            ];
        }));
    }
}
