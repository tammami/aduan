<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\transaksi;
use Faker\Generator as Faker;

$factory->define(transaksi::class, function (Faker $faker) {
    return [
        'kode' => $faker->regexify,
        'user_id' => rand(1, 10),
        'kendaraan_id' => rand(1, 50),
      
    ];
});


