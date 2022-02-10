<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'nama' => $faker->name,
        'user' => $faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'nomor_hp' => '081999888777',
        'remember_token' => Str::random(10),
    ];
});
