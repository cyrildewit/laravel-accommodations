<?php

use Carbon\Carbon;
use Spatie\Period\Period;
use App\Domain\Users\Models\User;
use App\Domain\Rooms\Models\Room;
use Illuminate\Support\Facades\Auth;
use App\Domain\Listings\Models\Listing;

// Auth::loginUsingId(1);
// Auth::guard('management')->loginUsingId(1);


Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/listings/{id}', 'ListingController@show')->name('listing.show');
// Route::get('/{listingType}/{areaSlug}/{listingSlug}/{id}', 'ListingController@show')->name('listing.show');

$checks = [
        [ // there is place
            'in' => Carbon::createFromDate(2018, 4, 4),
            'out' => Carbon::createFromDate(2018, 4, 5),
            'expected' => true,
        ],
        [ // there is no place
            'in' => Carbon::createFromDate(2018, 4, 5),
            'out' => Carbon::createFromDate(2018, 4, 6),
            'expected' => false,
        ],
        [ // there is no place
            'in' => Carbon::createFromDate(2018, 4, 6),
            'out' => Carbon::createFromDate(2018, 4, 7),
            'expected' => false,
        ],
        [ // there is place
            'in' => Carbon::createFromDate(2018, 4, 7),
            'out' => Carbon::createFromDate(2018, 4, 8),
            'expected' => true,
        ],
        [ // there is place
            'in' => Carbon::createFromDate(2018, 4, 9),
            'out' => Carbon::createFromDate(2018, 4, 15),
            'expected' => true,
        ],
        [ // there is place
            'in' => Carbon::createFromDate(2018, 4, 10),
            'out' => Carbon::createFromDate(2018, 4, 11),
            'expected' => true,
        ],
        [ // there is no place [failing]
            'in' => Carbon::createFromDate(2018, 4, 6),
            'out' => Carbon::createFromDate(2018, 4, 15),
            'expected' => false,
        ],
    ];

Route::get('availability', function () use ($checks) {
    $room = Room::find(1);
    $result = [];

    foreach($checks as $check) {
        $output = $room->isAvailableForPeriod($check['in'], $check['out']);

        array_push($result, ['expected' => $check['expected'], 'output' => $output]);
    }

    // return "asdfds";
    return $result;
});

Route::get('listings', function () {
    // $listing = Listing::find(1);



    $result = [];

    foreach($checks as $check) {
        array_push($result, checkAvailability($room, $check['in'], $check['out']));
    }

    return $result;

    $checkIn = Carbon::createFromDate(2018, 4, 5)->toDateString();
    $checkOut = Carbon::createFromDate(2018, 4, 8)->toDateString();

    // $count = $room->bookings()
    //         ->where('check_in_date', '>=', $checkIn)
    //         ->where('check_out_date', '<=', $checkOut)
    //         ->count();

    //
    // $count = $room->bookings()
    //         ->where(function ($query) use ($checkIn, $checkOut) {
    //             $query->where('check_in_date', '>=', $checkIn)
    //                   ->where('check_out_date', '<=', $checkIn); // <

    //             $query->orWhere(function ($query) use ($checkIn, $checkOut) {
    //                 $query->where('check_in_date', '<=', $checkOut) // <
    //                        ->where('check_out_date', '>=', $checkOut);
    //             });
    //         })
    //         ->count();

    // dd(
    //     !($count > 0)
    // );

    // return !($count > 0) ? 'There is place' : 'There is no place';

    // $listings = Listing::with(['rooms', 'address'])->get();
    $john = User::where('id', 1)->with(['bookings', 'bookings.room', 'bookings.room.listing'])->get();



    return $john;

    return view('portal.auth.login');
});


// function checkAvailability($room, $checkIn, $checkOut) {
//     $count = $room->bookings()
//             ->where(function ($query) use ($checkIn, $checkOut) {
//                 $query->where('check_in_date', '>=', $checkIn)
//                       ->where('check_out_date', '<', $checkIn); // <
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '<', $checkOut) // <
//                            ->where('check_out_date', '>=', $checkOut);
//                 })
//             ->count();

//     return !($count > 0) ? 'There is place' : 'There is no place';
// }

// function checkAvailability($room, $checkIn, $checkOut) {
//     $bookings = $room->bookings();

//     $count = $bookings->where(function ($query) use ($checkIn, $checkOut) {
//                 $query->where('check_in_date', '<=', $checkIn)
//                       ->where('check_out_date', '>=', $checkIn);
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '<', $checkOut) // <
//                            ->where('check_out_date', '>=', $checkOut);
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '>=', $checkIn) // <
//                            ->where('check_in_date', '<=', $checkOut);
//             })
//             ->count();

//     return !($count > 0) ? 'There is place' : 'There is no place';
// }


// function checkAvailability($room, $checkIn, $checkOut) {
//     $bookings = $room->bookings();

//     $count =
//             $bookings->where(function ($query) use ($checkIn, $checkOut) {
//                 $query->where('check_in_date', '<=', $checkIn)
//                       ->where('check_out_date', '>=', $checkOut);
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '>=', $checkIn)
//                            ->where('check_out_date', '<=', $checkOut);
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '>=', $checkIn)
//                            ->where('check_out_date', '=>', $checkOut)
//                            ->where('check_in_date', '<=', $checkOut);
//             })
//             ->orWhere(function ($query) use ($checkIn, $checkOut) {
//                     $query->where('check_in_date', '<=', $checkIn)
//                            ->where('check_out_date', '<=', $checkOut)
//                            ->where('check_out_date', '>=', $checkIn);
//             })
//             ->count();

//     return ($count === 0) ? 'There is place' : 'There is no place';
// }


//  $query->where(function ($query) use ($startTime, $endTime) {
//     $query->where('start', '>=', $startTime)
//             ->where('end', '<', $startTime);
//     })
//     ->orWhere(function ($query) use ($startTime, $endTime) {
//         $query->where('start', '<', $endTime)
//                 ->where('end', '>=', $endTime);
//     });
