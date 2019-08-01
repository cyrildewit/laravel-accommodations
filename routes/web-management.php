<?php

use App\Http\Controllers\Management\Auth\LoginController;
use App\Http\Controllers\Management\Auth\RegisterController;
use App\Http\Controllers\Management\Auth\VerificationController;
use App\Http\Controllers\Management\Auth\ResetPasswordController;
use App\Http\Controllers\Management\Auth\ForgotPasswordController;

Route::middleware('auth:management')->group(function () {

    // Redirect index to dashboard
    Route::redirect('/', '/dashboard');

    // Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

    // Listings
    Route::get('/listings', 'ListingController@index')->name('listing.index');
    Route::get('/listings/create', 'ListingController@create')->name('listing.create');
    Route::post('/listings/store', 'ListingController@store')->name('listing.store');
    Route::get('/listings/{listing}', 'ListingController@show')->name('listing.show');
    Route::get('/listings/{listing}/edit', 'ListingController@edit')->name('listing.edit');
    Route::put('/listings/{listing}/update', 'ListingController@update')->name('listing.update');
    Route::delete('/listings/{listing}', 'ListingController@destroy')->name('listing.destroy');

    // Bookings
    Route::get('/bookings', 'BookingController@index')->name('booking.index');
    Route::get('/bookings/create', 'BookingController@create')->name('booking.create');
    Route::post('/bookings/store', 'BookingController@store')->name('booking.store');
    Route::get('/bookings/{listing}', 'BookingController@show')->name('booking.show');
    Route::get('/bookings/{listing}/edit', 'BookingController@edit')->name('booking.edit');
    Route::put('/bookings/{listing}/update', 'BookingController@update')->name('booking.update');
    Route::delete('/bookings/{listing}', 'BookingController@destroy')->name('booking.destroy');

    // Users
    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/users/create', 'UserController@create')->name('user.create');
    Route::post('/users/store', 'UserController@store')->name('user.store');
    Route::get('/users/{user}', 'UserController@show')->name('user.show');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::put('/users/{user}/update', 'UserController@update')->name('user.update');
    Route::delete('/users/{user}', 'UserController@destroy')->name('user.destroy');
});

Route::name('auth.')->group(function () {

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
