<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(1, 1001),
        'name' => $faker->name,
        'pendidikan_terakhir' => $faker->randomElement(['SD', 'SMP', 'SMA']),
        'umur' => $faker->numberBetween(15,30),
        'alamat_lengkap' => $faker->randomElement(['Kulon Progo', 'Sleman', 'Bantul', 'Gunung Kidul', 'Jogja Kota']),
        'no_telp' => $faker->numberBetween(888888888888, 999999999999),
        'email' => $faker->randomElement(['arfian@gmail.com', 'dimas@gmail.com', 'andi@gmail.com', 'permana@gmail.com', 'barjono@gmail.com']),
        'foto' => $faker->image('public/img',640,480, null, false),
        'program_id' => $faker->randomElement([3, 4, 5])
    ];
});
