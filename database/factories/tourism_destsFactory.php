<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tourism_dests;
use Faker\Generator as Faker;

$factory->define(tourism_dests::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'desc' => $faker->text,
        'address' => $faker->text,
        'owner' => $faker->word,
        'id_des_cats' => $faker->randomDigitNotNull,
        'coords' => $faker->word,
        'email' => $faker->word,
        'tel' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
