<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients_bookmarks;
use Faker\Generator as Faker;

$factory->define(clients_bookmarks::class, function (Faker $faker) {

    return [
        'users_id' => $faker->randomDigitNotNull,
        'tourism_id' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'title' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
