<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',128)->unique();
            $table->string('type')->default('default');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('file',128)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->float('saldo')->nullable();
            $table->string('cuenta',16)->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
