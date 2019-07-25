<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Domain\Booking\Models\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'room_id' => 1,
            'user_id' => 1,
            'reference_id' => '1300030242',
            'check_in_date' => Carbon::createFromDate(2018, 4, 5),
            'check_out_date' => Carbon::createFromDate(2018, 4, 6),
            'number_of_guests' => 2,
            'total_price' => 90,
        ]);

        Booking::create([
            'room_id' => 1,
            'user_id' => 1,
            'reference_id' => '2300030242',
            'check_in_date' => Carbon::createFromDate(2018, 4, 6),
            'check_out_date' => Carbon::createFromDate(2018, 4, 7),
            'number_of_guests' => 2,
            'total_price' => 90,
        ]);

        Booking::create([
            'room_id' => 1,
            'user_id' => 1,
            'reference_id' => '3300030242',
            'check_in_date' => Carbon::createFromDate(2018, 4, 8),
            'check_out_date' => Carbon::createFromDate(2018, 4, 9),
            'number_of_guests' => 2,
            'total_price' => 90,
        ]);

        Booking::create([
            'room_id' => 1,
            'user_id' => 1,
            'reference_id' => '4300030242',
            'check_in_date' => Carbon::createFromDate(2018, 4, 15),
            'check_out_date' => Carbon::createFromDate(2018, 4, 20),
            'number_of_guests' => 2,
            'total_price' => 90,
        ]);
    }
}
