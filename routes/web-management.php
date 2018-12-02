<?php

Route::namespace('Auth')->name('auth.')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
});

Route::middleware('auth:management', 'can:browse_management')->group(function () {
    Route::get('dashboard')->name('dashboard');
});
