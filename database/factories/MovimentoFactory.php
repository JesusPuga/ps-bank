<?php

use Faker\Generator as Faker;

$factory->define(App\Movimento::class, function (Faker $faker) {
    return [
      'slug' => str_slug($faker->text(128)),
      'cliente_id' => rand(1,15),
      'cliente_destino_id' => rand(16,30),
      'monto' => rand(1000,2000),
      'fecha_apertura' => $faker->datedate($format = 'Y-m-d', $max = 'now'),
      'referencia' => $faker->text(128),
      'status' => $faker.random.boolean(),
    ];
});
