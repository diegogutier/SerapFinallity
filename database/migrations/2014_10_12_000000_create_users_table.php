<?php

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
            $table->string('email')->unique();
            $table->string('password',60);
            $table->integer('edad');
            $table->string('genero1');
            $table->string('genero2');
            $table->string('genero3');
            $table->string('no_genero1');
            $table->string('no_genero2');
            $table->string('no_genero3');
            $table->string('idioma1');
            $table->string('idioma2');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
