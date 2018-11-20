<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    $cuenta = $faker->text(124);

    return [
        'slug' => $cuenta,
        'cuenta' => str_slug($cuenta),
        'telefono' => $faker->text(16),
    ];
});
