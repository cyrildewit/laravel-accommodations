<?php

namespace App\Http\Controllers\Front;

use Domain\Listing\Models\Listing;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        $listings = Listing::paginate(15);

        return view('front.search.index', [
            'listings' => $listings,
        ]);
    }
}
