<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'id_prod_cats' => $faker->randomDigitNotNull,
        'price' => $faker->randomDigitNotNull,
        'isAvailable' => $faker->randomDigitNotNull,
        'contact_tel' => $faker->word,
        'contact_email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
