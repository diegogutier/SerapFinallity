<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArriendaUserPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrienda__user__peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();;
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->date('fecha_termino');
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
        Schema::drop('arrienda__user__peliculas');
    }
}
