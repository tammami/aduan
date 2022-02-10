<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Montir;
use Faker\Generator as Faker;

$factory->define(Montir::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 10),
        'nama' => $faker->unique()->userName,
        'alamat' => $faker->address,
        'nomor_hp' => '081999888777',
    ];
});
