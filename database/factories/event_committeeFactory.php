<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\event_committee;
use Faker\Generator as Faker;

$factory->define(event_committee::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'role' => $faker->word,
        'tel' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
