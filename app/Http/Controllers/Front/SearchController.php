<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        $listings = Listing::all();

        return view('front.search.index', [
            $matchedListings = $listings,
        ]);
    }
}
