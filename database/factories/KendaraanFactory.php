<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kendaraan;
use Faker\Generator as Faker;

$factory->define(Kendaraan::class, function (Faker $faker) {

    return [
        'user_id' => rand(1, 10),
        'pelanggan_id' => rand(1, 10),
        'thn_produksi' => $faker->year($max = 'now'),
        'nomor_plat' => $faker->postcode
    ];
});
