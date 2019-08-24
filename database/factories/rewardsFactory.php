<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\rewards;
use Faker\Generator as Faker;

$factory->define(rewards::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'point_cost' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
