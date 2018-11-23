<?php

use Faker\Generator as Faker;

$factory->define(App\Movimiento::class, function (Faker $faker) {
    return [
      'slug' => str_slug($faker->text(128)),
      'cliente_id' => rand(1,15),
      'cliente_destino_id' => rand(16,30),
      'monto' => rand(1000,2000),
      'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'referencia' => $faker->text(128),
      'descripcion' => $faker->text(128),
      'status' => True,
    ];
});
