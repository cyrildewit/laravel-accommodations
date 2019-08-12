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

        return response()->json([
            'suggestions' => City::where('name', 'like', "%{$query}%")->pluck('name')
        ]);
    }
}
