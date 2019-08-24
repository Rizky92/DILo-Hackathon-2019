<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tourism_events;
use Faker\Generator as Faker;

$factory->define(tourism_events::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'id_event_cats' => $faker->randomDigitNotNull,
        'desc' => $faker->word,
        'event_holder' => $faker->word,
        'event_holder_tel' => $faker->word,
        'event_holder_email' => $faker->word,
        'date_start' => $faker->word,
        'date_end' => $faker->word,
        'time_start' => $faker->word,
        'time_end' => $faker->word,
        'isDays' => $faker->randomDigitNotNull,
        'quota' => $faker->word,
        'rundown_id' => $faker->randomDigitNotNull,
        'tourism_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
