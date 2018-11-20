<?php

use Faker\Generator as Faker;

$factory->define(App\Cuenta::class, function (Faker $faker) {
    return [
        'cliente_id' => rand(1,30),
        'saldo' => rand(20000,50000),
        'fecha_apertura' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fecha_cierre' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'slug' => str_slug($faker->text(124)),
        'credito' => rand(20000,50000),
        'debito' => rand(20000,50000),
    ];
});
