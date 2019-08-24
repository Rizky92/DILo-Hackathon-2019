<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\reports;
use Faker\Generator as Faker;

$factory->define(reports::class, function (Faker $faker) {

    return [
        'date' => $faker->word,
        'target' => $faker->randomDigitNotNull,
        'achieved' => $faker->randomDigitNotNull,
        'num_of_reservations' => $faker->randomDigitNotNull,
        'num_of_visitors' => $faker->randomDigitNotNull,
        'income_amount' => $faker->randomDigitNotNull,
        'costs' => $faker->randomDigitNotNull,
        'profit' => $faker->randomDigitNotNull,
        'margin' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
