<?php

use Faker\Generator as Faker;
use Domain\Owners\Models\Owner;
use Domain\Listing\Models\Listing;
use Domain\Listing\Enums\ListingType;

$factory->define(Listing::class, function (Faker $faker) {
    return [
        'owner_id' => factory(Owner::class)->create()->getKey(),
        'name' => $faker->unique()->company(),
        'description' => $faker->text(),
        'type' => ListingType::getRandomKey(),
    ];
});
