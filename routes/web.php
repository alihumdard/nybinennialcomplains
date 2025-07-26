<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilingController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SubmissionActionsController;
use App\Http\Controllers\SubmissionController;


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'es'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/', [PageController::class, 'landing'])->name('home');
Route::get('/checkout', [PageController::class, 'checkout'])->name('checkout');
Route::get('/confirmation', [PageController::class, 'confirmation'])->name('confirmation');
Route::get('/submission/{submission}/pdf', [PDFController::class, 'download'])->name('submission.pdf');
Route::get('/checkout/{submission:dos_id}', [PageController::class, 'showCheckoutWithData'])->name('checkout.with_data');
Route::post('/filing/{submission:dos_id}/process', [FilingController::class, 'processFiling'])->name('filing.process');
Route::get('/form', function () {
    return view('pages.contact');
})->name('form');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);

    Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('otp/verify', [ForgotPasswordController::class, 'showOtpForm'])->name('password.otp.form');
    Route::post('otp/verify', [ForgotPasswordController::class, 'verifyOtp'])->name('password.otp.verify');
    Route::get('reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset.form');
    Route::post('reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
});


Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');
        Route::get('/import', [ImportController::class, 'showForm'])->name('import.form');
        Route::post('/import', [ImportController::class, 'processImport'])->name('import.process');
        Route::get('/submissions/{submission}', [SubmissionController::class, 'show'])->name('submissions.show');
         Route::post('/submission/{submission}/send-mail', [SubmissionActionsController::class, 'sendSingleMail'])->name('submission.send-mail');
        Route::post('/submissions/bulk-mail', [SubmissionActionsController::class, 'sendBulkMail'])->name('submissions.bulk-mail');
    });
});
   Route::get('/form', function () {
            return view('pages.contact');
        })->name('form');
          Route::get('/faq', function () {
            return view('pages.faq');
        })->name('faq');