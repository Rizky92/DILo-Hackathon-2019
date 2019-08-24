<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\inv_profiles;
use Faker\Generator as Faker;

$factory->define(inv_profiles::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'desc_profile' => $faker->word,
        'address' => $faker->word,
        'owner' => $faker->word,
        'coords' => $faker->word,
        'email' => $faker->word,
        'telp' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
