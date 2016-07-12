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
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('pelicula_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('set null');
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
