<?php

use Faker\Generator as Faker;
use App\Domain\Rooms\Models\Room;
use App\Domain\Owners\Models\Owner;
use App\Domain\Listings\Models\Listing;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'listing_id' => factory(Listing::class)->create()->getKey(),
        'name' => $faker->unique()->name(),
        'description' => $faker->text(),
    ];
});
