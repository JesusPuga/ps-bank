<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cliente::class,20)->create().each(function(App\Cliente $cliente){
          $cliente->cuenta()->attach(1);
        });
    }
}
