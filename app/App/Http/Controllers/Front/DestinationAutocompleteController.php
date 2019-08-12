<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Domain\City\Models\City;
use Domain\Country\Models\Country;
use App\Http\Controllers\Controller;

class DestinationAutocompleteController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $cities = City::where('name', 'like', "%{$query}%")->get();
        $countries = Country::where('name', 'like', "%{$query}%")->get();

        $result = $cities->merge($countries);

        return response()->json([
            'suggestions' => $result->map(function ($item, $key) {
                return [
                    'value' => $item->name,
                    'data' => [
                        'type' => $item instanceof City ? 'city' : 'country',
                        'id' => $item->getKey(),
                    ],
                ];
            })
        ]);
    }
}
