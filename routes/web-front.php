<?php

use Illuminate\Support\Facades\Auth;
use App\Domain\Listings\Models\Listing;

// Auth::loginUsingId(1);
Auth::guard('management')->loginUsingId(1);

Route::get('/', 'HomeController@index')->name('home');

Route::get('listings', function () {
    $listings = Listing::with(['rooms', 'address'])->get();

    return view('portal.auth.login');
});
