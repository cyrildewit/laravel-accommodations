<?php

use Illuminate\Database\Seeder;
use App\Domain\Bookings\Models\Booking;

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
            'reference_id' => 1300030242,
            'check_in_date' => now()->today(),
            'check_out_date' => now()->today()->addDays(4),
            'number_of_guests' => 2,
            'total_price' => 90,
        ]);
    }
}
