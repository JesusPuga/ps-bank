<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuenta_id');
            $table->string('cuenta_destino_id');
            $table->float('monto');
            $table->string('descripcion');
            $table->dateTime('fecha');
            $table->boolean('local');
            $table->string('referencia',128);
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('cuenta_id')->references('codigo_cuenta')->on('cuentas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moivimientos');
    }
}
