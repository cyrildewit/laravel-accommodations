<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Domain\Listing\Models\Listing;

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
