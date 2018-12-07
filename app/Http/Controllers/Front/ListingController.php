<?php

namespace App\Http\Controllers\Front;

use App\Domain\Listings\Models\Listing;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function show($id)
    {
        $listing = Listing::where('id', $id)->first();

        return view('front.listing.show', [
            'listing' => $listing,
        ]);
    }
}
