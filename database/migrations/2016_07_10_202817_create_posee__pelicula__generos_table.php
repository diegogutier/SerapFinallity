<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoseePeliculaGenerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee__pelicula__generos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('genero_id')->unsigned();
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
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
        Schema::drop('posee__pelicula__generos');
    }
}
