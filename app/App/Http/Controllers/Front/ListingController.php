<?php

namespace App\Http\Controllers\Front;

use Domain\Listing\Models\Listing;
use App\Http\Controllers\Controller;

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
