<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {

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

    $sectorSettings = \App\Models\SiteSetting::whereIn('key', ['sector_home_count', 'sector_home_layout'])->pluck('value', 'key')->toArray();
    $cardCount = $sectorSettings['sector_home_count'] ?? 8;

    return view('website.home.index', compact('featuredEvent', 'sectorSettings'));
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

Route::prefix('sectors')->name('sectors.')->group(function () {
    Route::get('/', function () {
        return view('website.sectors.index');
    })->name('index');
    Route::get('{slug}', function ($slug) {
        return view('website.sectors.' . $slug);
    })->name('show');
});
Route::prefix('join')->name('join.')->group(function () {
    Route::get('/', function () {
        return view('website.join.index');
    })->name('index');

    Route::get('/application/{slug}', [\App\Http\Controllers\Website\FormController::class, 'show'])->name('forms.show');
    Route::post('/application/{slug}', [\App\Http\Controllers\Website\FormController::class, 'store'])->name('forms.store');
    Route::get('/thank-you/{submission}', function (\App\Models\Submission $submission) {
        return view('website.forms.thank_you', compact('submission'));
    })->name('forms.thank_you');
});

Route::get('/payment/verify', [\App\Http\Controllers\RazorpayController::class, 'verify']);

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
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
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

    // Site Settings
    Route::get('settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'bulkUpdate'])->name('settings.bulk-update');

    Route::resource('forms', \App\Http\Controllers\Admin\FormController::class);
    Route::get('forms/{form}/submissions', [\App\Http\Controllers\Admin\SubmissionController::class, 'formSubmissions'])->name('forms.submissions');
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->only(['index', 'show']);

    // Admin Submissions Management
    Route::get('submissions', [\App\Http\Controllers\Admin\SubmissionController::class, 'index'])->name('submissions.index');
    Route::get('submissions/{submission}', [\App\Http\Controllers\Admin\SubmissionController::class, 'show'])->name('submissions.show');
    Route::delete('submissions/{submission}', [\App\Http\Controllers\Admin\SubmissionController::class, 'destroy'])->name('submissions.destroy');
    Route::get('invoice/{submission}/download', [\App\Http\Controllers\InvoiceController::class, 'download'])->name('invoice.download');
});
