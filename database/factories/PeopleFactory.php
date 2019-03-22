<?php

use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    $faker->locale('pt_BR');

    return [
        'name' => $faker->name,
        'telephone' => mt_rand(10000000, 99999999),
    ];
});
