<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActuaActorPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actua__actor__peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actor_id')->unsigned()->nullable();
            $table->integer('pelicula_id')->unsigned()->nullable();
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('set null');
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
        Schema::drop('actua__actor__peliculas');
    }
}
