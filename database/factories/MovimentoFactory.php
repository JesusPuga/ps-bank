<?php

use Faker\Generator as Faker;

$factory->define(App\Movimiento::class, function (Faker $faker) {
    return [
      'cuenta_id' => str(rand(1,15)),
      'cuenta_destino_id' => str(rand(16,30)),
      'monto' => rand(1000,2000),
      'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'referencia' => $faker->text(128),
      'descripcion' => $faker->text(128),
      'status' => True,
      'local' => True,
    ];
});
