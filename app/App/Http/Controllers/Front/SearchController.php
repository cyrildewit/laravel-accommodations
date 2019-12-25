<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Domain\City\Models\City;
use Domain\Country\Models\Country;
use Domain\Listing\Models\Listing;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('destination');

        $cities = City::query()
            ->with('listings', 'listings.location')
            ->where('name', 'like', "%{$query}%")
            ->get();

        $countries = Country::query()
            ->with('listings', 'listings.location')
            ->where('name', 'like', "%{$query}%")
            ->get();

        $destinations = $cities->merge($countries);

        $listings = $destinations->flatMap(function ($item, $key) {
            return $item->listings;
        });

        // $listings = $listings
        //     ->paginate(15);

        // $listings = Listing::query()
        //     ->with('location')
        //     ->paginate(15);

        return view('front.search.index', [
            'listings' => $listings,
            'destinationQuery' => $request->input('destination'),
        ]);
    }
}
