<?php

use Illuminate\Database\Seeder;
use Domain\Country\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Netherlands',
        ]);

        Country::create([
            'name' => 'Germany',
        ]);

        Country::create([
            'name' => 'Belgium',
        ]);

        Country::create([
            'name' => 'United Kingdom',
        ]);

        Country::create([
            'name' => 'France',
        ]);

        Country::create([
            'name' => 'Australia',
        ]);

        Country::create([
            'name' => 'Greece',
        ]);
    }
}
