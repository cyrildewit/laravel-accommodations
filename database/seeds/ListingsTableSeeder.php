<?php

use Illuminate\Database\Seeder;

use App\Domain\Users\Models\User;
use App\Domain\Listings\Models\Room;
use App\Domain\Listings\Models\Listing;
use App\Domain\Addresses\Models\Address;
use App\Domain\Listings\Enums\ListingType;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $john = User::where('email', 'johndoe@example.com')->first();
        $listing= Listing::create([
            'owner_id' => $john->id,
            'name' => 'B&B De Monnick',
            'description' => 'De Monnick ligt in Monnickendam en biedt accommodatie met een terras en gratis WiFi. Deze bed & breakfast beschikt over een tuin. De bed & breakfast is voorzien van een flatscreen-tv met satellietzenders. Er wordt elke ochtend een continentaal ontbijt geserveerd. In de omgeving kunt u uitstekend fietsen.',
            'type' => ListingType::BedAndBreakfast,
        ]);

        $listing->rooms()->save(new Room([
            'name' => 'Huisje',
            'description' => 'Accommodatie met een terras en gratis WiFi.',
        ]));

        $listing->rooms()->save(new Room([
            'name' => 'Huisje',
            'description' => 'Accommodatie met een terras en gratis WiFi.',
        ]));

        $listing->address()->save(new Address([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'country' => 'nl',
            'street' => 'Noordeinde',
            'street_number' => 8,
            'post_code' => '1141 AM',
        ]));
    }
}
