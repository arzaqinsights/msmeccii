<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    $sectors = \App\Models\Sector::where('status', 'active')->latest()->take(8)->get();
    
    $featuredEvent = \App\Models\Event::where('status', 'published')
        ->where('design_style', 'featured')
        ->where('event_date', '>=', now())
        ->orderBy('event_date', 'asc')
        ->first();
        
    if (!$featuredEvent) {
        $featuredEvent = \App\Models\Event::where('status', 'published')
            ->orderBy('event_date', 'asc')
            ->first();
    }

    return view('website.home.index', compact('sectors', 'featuredEvent'));
})->name('home');

Route::prefix('about')->group(function () {
    Route::get('/what-is-msmeccii', function () {
        return view('website.about.what_is');
    })->name('about.what_is');

    Route::get('/chairman', function () {
        return view('website.about.chairman');
    })->name('about.chairman');

    Route::get('/leadership', function () {
        return view('website.about.leadership');
    })->name('about.leadership');
});


// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    // Password Reset Routes
    Route::get('/password/reset', [PasswordResetController::class, 'showForgot'])->name('password.request');
    Route::post('/password/email', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
    Route::get('/password/reset/{token}', [PasswordResetController::class, 'showReset'])->name('password.reset');
    Route::post('/password/reset', [PasswordResetController::class, 'reset'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Email Verification Routes
    Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
    Route::post('/email/verification-notification', [VerificationController::class, 'resend'])->middleware(['throttle:6,1'])->name('verification.send');
    
    // User Account
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', function () {
            $submissions = \App\Models\Submission::where('user_id', auth()->id())
                            ->with('form')
                            ->latest()
                            ->get();
            return view('website.account.dashboard', compact('submissions'));
        })->name('dashboard');
    });
});

// -------------------------------------------------------------
// SECURE ADMIN PANEL ROUTING
// -------------------------------------------------------------
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('sectors', \App\Http\Controllers\Admin\SectorController::class);
    Route::resource('forms', \App\Http\Controllers\Admin\FormController::class);
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
});

Route::get('/sectors', function () {
    $sectors = \App\Models\Sector::where('status', 'active')->latest()->paginate(12);
    return view('website.sectors.index', compact('sectors'));
})->name('sectors.index');

Route::get('/sectors/{slug}', function ($slug) {
    $sector = \App\Models\Sector::where('slug', $slug)
        ->where('status', 'active')
        ->with('sections')
        ->firstOrFail();
    return view('website.sectors.show', compact('sector'));
})->name('sectors.show');

Route::prefix('join')->name('join.')->group(function () {
    Route::get('/', function () {
        return view('website.join.index');
    })->name('index');
    
    Route::get('/application/{slug}', [\App\Http\Controllers\Website\FormController::class, 'show'])->name('forms.show');
    Route::post('/application/{slug}', [\App\Http\Controllers\Website\FormController::class, 'store'])->name('forms.store');
});

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', function () {
        $events = \App\Models\Event::where('status', 'published')->orderBy('event_date', 'asc')->paginate(12);
        return view('website.events.index', compact('events'));
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        $event = \App\Models\Event::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        return view('website.events.show', compact('event'));
    })->name('show');
});

Route::get('/news', function () {
    return view('website.news.index');
})->name('news');

Route::get('/gallery', function () {
    return view('website.gallery.index');
})->name('gallery');

Route::get('/contact', function () {
    return view('website.contact.index');
})->name('contact');
