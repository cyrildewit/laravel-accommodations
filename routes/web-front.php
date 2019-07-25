<?php

use Illuminate\Support\Facades\Auth;
use Domain\Listing\Models\Listing;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ListingController;
use App\Http\Controllers\Front\SearchController;

// Auth::loginUsingId(1);
// Auth::guard('management')->loginUsingId(1);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listing.show');
// Route::get('/{listingType}/{areaSlug}/{listingSlug}/{id}', [ListingController::class, 'show'])->name('listing.show');
