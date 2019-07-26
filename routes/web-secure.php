<?php

use App\Http\Controllers\Secure\BookingController;
use App\Http\Controllers\Secure\SettingController;
use App\Http\Controllers\Secure\DashboardController;
use App\Http\Controllers\Secure\Auth\LoginController;
use App\Http\Controllers\Secure\Auth\RegisterController;
use App\Http\Controllers\Secure\Auth\VerificationController;
use App\Http\Controllers\Secure\Auth\ResetPasswordController;
use App\Http\Controllers\Secure\Auth\ForgotPasswordController;

Route::middleware('auth:secure')->group(function () {

    // Redirect index to dashboard
    Route::redirect('/', '/dashboard');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Booking
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

    // Settings
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
});

Route::namespace('Auth')->name('auth.')->group(function () {

    // Authentication routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Registration routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Password reset routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

    // Email verification routes
    Route::get('email/verify', [VerificationController::class, 'showLinkRequestForm'])->name('verification.notice');
    Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::get('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});
