<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\VerificationController;

use App\Http\Controllers\Website\AccountController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\SectorController;
use App\Http\Controllers\Website\EventController;
use App\Http\Controllers\Website\SitemapController;
use App\Http\Controllers\Website\FormController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/terms-and-conditions', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/contact', [PageController::class, 'contact']);

Route::prefix('about')->group(function () {
    Route::get('/what-is-msmeccii', [PageController::class, 'about'])->name('about.what_is');
    Route::get('/chairman', [PageController::class, 'chairman'])->name('about.chairman');
    Route::get('/leadership', [PageController::class, 'leadership'])->name('about.leadership');
});

Route::prefix('sectors')->name('sectors.')->group(function () {
    Route::get('/', [SectorController::class, 'index'])->name('index');
    Route::get('{slug}', [SectorController::class, 'show'])->name('show');
});

Route::prefix('services')->name('services.')->group(function () {
    Route::get('{slug}', [PageController::class, 'service'])->name('show');
});

Route::prefix('join')->name('join.')->group(function () {
    Route::get('/', [PageController::class, 'join'])->name('index');

    Route::get('/application/{slug}', [FormController::class, 'show'])->name('forms.show');
    Route::post('/application/{slug}', [FormController::class, 'store'])->name('forms.store');
    Route::get('/thank-you/{submission}', [FormController::class, 'thankYou'])->name('forms.thank_you');

});

Route::get('/payment/verify', [\App\Http\Controllers\RazorpayController::class, 'verify'])->name('payment.verify');
Route::post('/payment/webhook', [\App\Http\Controllers\RazorpayController::class, 'webhook'])->name('payment.webhook');

Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', [EventController::class, 'index'])->name('index');
    Route::get('/{slug}', [EventController::class, 'show'])->name('show');
});

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{category}', [PageController::class, 'galleryShow'])->name('gallery.show');
Route::get('/growth', [\App\Http\Controllers\Website\GrowthController::class, 'index'])->name('growth');
Route::get('/wall-of-excellence', [\App\Http\Controllers\Website\ExcellenceController::class, 'index'])->name('excellence.index');

// Blog & Articles
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Website\ArticleController::class, 'index'])->name('index');
    Route::get('/{slug}', [\App\Http\Controllers\Website\ArticleController::class, 'show'])->name('show');
});

// SEO Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');




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
        Route::get('/', [AccountController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AccountController::class, 'editProfile'])->name('profile');
        Route::put('/profile', [AccountController::class, 'updateProfile'])->name('profile.update');
        Route::get('/security', [AccountController::class, 'security'])->name('security');
        Route::put('/security', [AccountController::class, 'updateSecurity'])->name('security.update');
    });

    Route::get('invoice/{submission}/download', [\App\Http\Controllers\InvoiceController::class, 'download'])->name('invoice.download');
});

// -------------------------------------------------------------
// SECURE ADMIN PANEL ROUTING
// -------------------------------------------------------------
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Site Settings
    Route::get('settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [\App\Http\Controllers\Admin\SiteSettingController::class, 'bulkUpdate'])->name('settings.bulk-update');

    // Invoice Designer (Multiple Templates)
    Route::get('invoice-designer', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'index'])->name('invoice-designer.index');
    Route::get('invoice-designer/create', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'create'])->name('invoice-designer.create');
    Route::post('invoice-designer', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'store'])->name('invoice-designer.store');
    Route::get('invoice-designer/{template}/edit', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'edit'])->name('invoice-designer.edit');
    Route::put('invoice-designer/{template}', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'update'])->name('invoice-designer.update');
    Route::delete('invoice-designer/{template}', [\App\Http\Controllers\Admin\InvoiceTemplateController::class, 'destroy'])->name('invoice-designer.destroy');

    Route::resource('forms', \App\Http\Controllers\Admin\FormController::class);
    Route::get('forms/{form}/submissions', [\App\Http\Controllers\Admin\SubmissionController::class, 'formSubmissions'])->name('forms.submissions');
    Route::post('events/upload-attachment', [\App\Http\Controllers\Admin\EventController::class, 'uploadAttachment'])->name('events.upload-attachment');
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->only(['index', 'show']);

    // Gallery Management
    Route::post('gallery/save-order', [\App\Http\Controllers\Admin\GalleryController::class, 'saveOrder'])->name('gallery.save-order');
    Route::post('gallery/update-category', [\App\Http\Controllers\Admin\GalleryController::class, 'updateCategory'])->name('gallery.update-category');
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->only(['index', 'store', 'show', 'destroy']);

    // Articles & Blog Builder
    Route::post('articles/upload-image', [\App\Http\Controllers\Admin\ArticleController::class, 'uploadImage'])->name('articles.upload-image');
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);

    // Home Slider Management
    Route::post('sliders/update-order', [\App\Http\Controllers\Admin\HomeSliderController::class, 'updateOrder'])->name('sliders.update-order');
    Route::resource('sliders', \App\Http\Controllers\Admin\HomeSliderController::class)->only(['index', 'store', 'update', 'destroy']);

    // Admin Submissions Management
    Route::get('submissions', [\App\Http\Controllers\Admin\SubmissionController::class, 'index'])->name('submissions.index');
    Route::get('submissions/{submission}', [\App\Http\Controllers\Admin\SubmissionController::class, 'show'])->name('submissions.show');
    Route::post('submissions/{submission}/mark-as-paid', [\App\Http\Controllers\Admin\SubmissionController::class, 'markAsPaid'])->name('submissions.mark-as-paid');
    Route::delete('submissions/{submission}', [\App\Http\Controllers\Admin\SubmissionController::class, 'destroy'])->name('submissions.destroy');
    
    // Growth & Stats Management
    Route::resource('growth', \App\Http\Controllers\Admin\GrowthRecordController::class);

    // Wall of Excellence
    Route::resource('excellence', \App\Http\Controllers\Admin\ExcellenceAwardController::class);

    // Team & Person Pages
    Route::resource('team-pages', \App\Http\Controllers\Admin\TeamPageController::class);
    Route::prefix('team-pages/{team_page}')->name('team-pages.')->group(function () {
        Route::resource('members', \App\Http\Controllers\Admin\TeamMemberController::class);
    });
});

Route::get('/about/{slug}', [PageController::class, 'teamPage'])->name('about.team_page');
