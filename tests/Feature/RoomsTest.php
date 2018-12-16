<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use App\Domain\Rooms\Models\Room;
use App\Domain\Owners\Models\Owner;
use App\Domain\Listings\Models\Listing;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoomsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function availability_for_a_period_can_be_determined()
    {
        $owner = factory(Owner::class)->create();
        $listing = factory(Listing::class)->create(['owner_id' => $owner->getKey()]);
        $room = factory(Room::class)->create(['listing_id' => $listing->getKey()]);

        // $room->bookings()->saveMany();

        $this->assertTrue($room->isAvailableForPeriod(Carbon::createFromDate(2018, 4, 5), Carbon::createFromDate(2018, 4, 6)));
    }
}
