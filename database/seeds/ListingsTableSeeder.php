<?php

use Illuminate\Database\Seeder;

use App\Domain\Listings\Models\Listing;
use App\Domain\Listings\Models\Room;
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
        Listing::create([
            'name' => 'B&B De Monnick',
            'description' => 'De Monnick ligt in Monnickendam en biedt accommodatie met een terras en gratis WiFi. Deze bed & breakfast beschikt over een tuin. De bed & breakfast is voorzien van een flatscreen-tv met satellietzenders. Er wordt elke ochtend een continentaal ontbijt geserveerd. In de omgeving kunt u uitstekend fietsen.',
            'type' => ListingType::BedAndBreakfast,
        ]);

        Room::create([
            'listing_id' => 1,
            'name' => 'Huisje',
            'description' => 'Accommodatie met een terras en gratis WiFi.',
        ]);
    }
}
