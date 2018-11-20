<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimentosTable extends Migration
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
            $table->string('slug',128)->unique();
            $table->integer('cliente_id')->unsigned();
            $table->integer('cliente_destino_id')->unsigned();
            $table->float('monto');
            $table->dateTime('fecha');
            $table->string('referencia',128);
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('cliente_id')->references('id')->on('clientes')
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
