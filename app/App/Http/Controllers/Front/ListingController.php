<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Domain\Listing\Models\Listing;

class ListingController extends Controller
{
    public function show($id)
    {
        $listing = Listing::query()
            ->where('id', $id)
            ->with(['location'])
            ->first();

        return view('front.listing.show', [
            'listing' => $listing,
        ]);
    }
}
