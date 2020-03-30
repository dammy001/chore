<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'dateposted' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
