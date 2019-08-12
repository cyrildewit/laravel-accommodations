<?php

use Domain\City\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => 'Amsterdam',
            'country_id' => 1,
        ]);

        City::create([
            'name' => 'Londen',
            'country_id' => 4,
        ]);

        City::create([
            'name' => 'Athens',
            'country_id' => 7,
        ]);

        City::create([
            'name' => 'Nice',
            'country_id' => 5,
        ]);

        City::create([
            'name' => 'Paris',
            'country_id' => 5,
        ]);
    }
}
