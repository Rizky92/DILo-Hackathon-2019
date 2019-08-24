<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tourism_des_cats;
use Faker\Generator as Faker;

$factory->define(tourism_des_cats::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
