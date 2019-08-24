<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\clients_users;
use Faker\Generator as Faker;

$factory->define(clients_users::class, function (Faker $faker) {

    return [
        'username' => $faker->word,
        'password' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
