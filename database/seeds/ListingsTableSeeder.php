<?php

use Domain\Room\Models\Room;
use Domain\Owners\Models\Owner;
use Illuminate\Database\Seeder;
use Domain\Listing\Models\Listing;
use Domain\Location\Models\Location;
use Domain\Listing\Enums\ListingType;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->jamy_bbdemonnick();

        $this->jade_hotel_zeus();
    }

    protected function jamy_bbdemonnick()
    {
        $jamy = Owner::where('email', 'jamyjohnson@example.com')->first();
        $listing = Listing::create([
            'owner_id'    => $jamy->id,
            'name'        => 'B&B De Monnick',
            'description' => 'De Monnick ligt in Monnickendam en biedt accommodatie met een terras en gratis WiFi. Deze bed & breakfast beschikt over een tuin. De bed & breakfast is voorzien van een flatscreen-tv met satellietzenders. Er wordt elke ochtend een continentaal ontbijt geserveerd.',
            'type'        => ListingType::BedAndBreakfast,
        ]);

        $listing->location()->save(new Location([
            'lat'               => '5.035671',
            'lng'               => '52.459534',
            'formatted_address' => 'Noordeinde 8, 1141 AM, Nederland',
        ]));

        $listing->rooms()->save(new Room([
            'name'        => 'Huisje',
            'description' => 'Accommodatie met een terras en gratis WiFi.',
        ]));

        $listing->rooms()->save(new Room([
            'name'        => 'Huisje',
            'description' => 'Accommodatie met een terras en gratis WiFi.',
        ]));

        // $listing->address()->save(new Address([
        //     'first_name' => 'John',
        //     'last_name' => 'Doe',
        //     'country' => 'nl',
        //     'street' => 'Noordeinde',
        //     'street_number' => 8,
        //     'post_code' => '1141 AM',
        // ]));
    }

    protected function jade_hotel_zeus()
    {
        $jade = Owner::where('email', 'jadymith@example.com')->first();
        $listing = Listing::create([
            'owner_id'    => $jade->id,
            'name'        => 'Hotel Zeus',
            'description' => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            'type'        => ListingType::Hotel,
        ]);

        $listing->location()->save(new Location([
            'lat'               => '47.72051',
            'lng'               => '22.24166',
            'formatted_address' => '450 West 31st Street, New York, NY 10001, United States of America',
        ]));
    }
}
