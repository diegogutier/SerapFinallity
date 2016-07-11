<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificaPeliculaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('califica__pelicula__users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('calificacion');
            $table->integer('user_id')->unsigned();
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
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
        Schema::drop('califica__pelicula__users');
    }
}
