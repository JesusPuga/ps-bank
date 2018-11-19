<?php

use Faker\Generator as Faker;

$factory->define(App\Cuenta::class, function (Faker $faker) {
    return [
        'saldo' => rand(20000,50000),
        'fecha_apertura' => $faker->date.past(5),
        'fecha_cierre' => $faker->date.future(5),
        'slug' => str_lug($faker->text(124)),
        'credito' => rand(20000,50000),
        'debito' => rand(20000,50000),
    ];
});
