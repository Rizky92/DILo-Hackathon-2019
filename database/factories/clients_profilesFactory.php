<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients_profiles;
use Faker\Generator as Faker;

$factory->define(clients_profiles::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'tgl_lahir' => $faker->word,
        'jk' => $faker->randomElement(['Male', 'Female']),
        'alamat' => $faker->text,
        'no_hp' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
