<?php

use Illuminate\Database\Seeder;
use Domain\Room\Models\Room;
use Domain\Owners\Models\Owner;
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
        $jamy = Owner::where('email', 'jamyjohnson@example.com')->first();
        $listing = Listing::create([
            'owner_id'    => $jamy->id,
            'name'        => 'B&B De Monnick',
            'description' => 'De Monnick ligt in Monnickendam en biedt accommodatie met een terras en gratis WiFi. Deze bed & breakfast beschikt over een tuin. De bed & breakfast is voorzien van een flatscreen-tv met satellietzenders. Er wordt elke ochtend een continentaal ontbijt geserveerd. In de omgeving kunt u uitstekend fietsen.',
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
}
