<?php

use Illuminate\Database\Seeder;

class MovimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Movimiento::class,20)->create().each(function(App\Movimiento $movimiento){
        $movimiento->cliente()->attach(ran(1,30));
      });
  }
    }
}
