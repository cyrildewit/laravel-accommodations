<?php

Route::middleware('auth:secure', 'can:browse_secure')->group(function () {

    // Redirect index to dashboard
    Route::redirect('/', '/dashboard');

    // Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
});

Route::namespace('Auth')->name('auth.')->group(function () {

    // Authentication routes
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Registration routes
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    // Password reset routes
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    // Email verification routes
    Route::get('email/verify', 'VerificationController@showLinkRequestForm')->name('verification.notice');
    Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
});
