<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients_scores;
use Faker\Generator as Faker;

$factory->define(clients_scores::class, function (Faker $faker) {

    return [
        'users_id' => $faker->randomDigitNotNull,
        'total_points' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
