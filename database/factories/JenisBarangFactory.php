<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\JenisBarang;
use Faker\Generator as Faker;

$factory->define(JenisBarang::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'nama' => $faker->unique()->userName,
    ];
});
