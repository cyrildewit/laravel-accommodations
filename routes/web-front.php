<?php

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/{listingType}/{areaSlug}/{listingSlug}/{id}', 'ListingController@show')->name('listing.show');
