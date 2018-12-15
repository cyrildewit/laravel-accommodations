<?php

use Faker\Generator as Faker;
use App\Domain\Owners\Models\Owner;
use App\Domain\Listings\Models\Listing;
use App\Domain\Listings\Enums\ListingType;

$factory->define(Listing::class, function (Faker $faker) {
    return [
        'owner_id' => factory(Owner::class)->create()->getKey(),
        'name' => $faker->unique()->company(),
        'description' => $faker->text(),
        'type' => ListingType::getRandomKey(),
    ];
});
