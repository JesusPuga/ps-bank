<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\User::create([
        'name' => 'admin',
        'email' => 'admin@email.com',
        'password' => bcrypt('password'),
        'type' => App\User::ADMIN_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'admin',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 1,
        'codigo_cuenta' => '0000000000000001',
        'slug' => '1',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'facpya',
        'email' => 'dleonmxn@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'facpya',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 2,
        'codigo_cuenta' => '0000000000000002',
        'slug' => '2',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'reposteria',
        'email' => 'reposteria.rebscar@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'resposteria',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 3,
        'codigo_cuenta' => '0000000000000003',
        'slug' => '3',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'timhortons',
        'email' => 'samuelrrodriguez@hotmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'timhortons',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 4,
        'codigo_cuenta' => '0000000000000004',
        'slug' => '4',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'abastecedora',
        'email' => 'abastecedora@email.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'abastecedora',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 5,
        'codigo_cuenta' => '0000000000000005',
        'slug' => '5',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'molino',
        'email' => 'isralixo@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'molino',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 6,
        'codigo_cuenta' => '0000000000000006',
        'slug' => '6',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'cafeteria',
        'email' => 'luischido13.miguel@hotmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'cafeteria',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 7,
        'codigo_cuenta' => '0000000000000007',
        'slug' => '7',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'caketastic',
        'email' => 'bryant.mauri@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'caketastic',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 8,
        'codigo_cuenta' => '0000000000000008',
        'slug' => '8',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'productosav',
        'email' => 'productosav123@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'productosav',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 9,
        'codigo_cuenta' => '0000000000000009',
        'slug' => '9',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      App\User::create([
        'name' => 'coffeBreak',
        'email' => 'cfeebrk@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'coffeBreak',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 10,
        'codigo_cuenta' => '0000000000000010',
        'slug' => '10',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);
      App\User::create([
        'name' => 'molino2',
        'email' => 'Cristopherurrutia2@gmail.com',
        'password' => bcrypt('password'),
        'type' => App\User::DEFAULT_TYPE
      ]);

      App\Cliente::create([
        'slug' => 'coffeBreak',
        'cuenta' => 'true',
        'telefono' => '12345678'
      ]);

      App\Cuenta::create([
        'cliente_id' => 10,
        'codigo_cuenta' => '0000000000000011',
        'slug' => '10',
        'saldo' => 10000000,
        'fecha_apertura' => date('Y-m-d'),
        'fecha_cierre' => date('Y-m-d'),
        'credito' => 100000,
        'debito' => 1000000
      ]);

      factory(App\User::class,20)->create();
    }
}
