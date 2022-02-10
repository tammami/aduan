<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use Faker\Generator as Faker;

$factory->define(Barang::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'jenis_barang_id' => rand(1,10),
        'nama' => $faker->unique()->userName,
        'satuan' => $faker->unique()->userName,
        'jumlah' => rand(10,100),
        'harga_beli' => rand(10000,12000),
        'harga_jual' => rand(13000,17000),
    ];
});
