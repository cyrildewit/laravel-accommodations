<?php

use Faker\Generator as Faker;
use Domain\Room\Models\Room;
use Domain\Listing\Models\Listing;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'listing_id' => factory(Listing::class)->create()->getKey(),
        'name' => $faker->unique()->name(),
        'description' => $faker->text(),
    ];
});
