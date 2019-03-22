<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    $faker->locale('en_US');

    return [
        'country' => $faker->stateAbbr,
        'state' => $faker->state,
        'city' => $faker->city,
        'street' => $faker->streetAddress,
        'house' => mt_rand(1, 99),
    ];
});
