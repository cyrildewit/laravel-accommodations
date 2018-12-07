<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Domain\Listings\Models\Listing;

class ListingController extends Controller
{
    public function show($listingType, $areaSlug, $listingSlug, $slugId)
    {
        $listing = Listing::where('slug_id', $slugId)->first();

        return view('front.listing.show', [
            'listing' => $listing,
        ]);
    }
}
