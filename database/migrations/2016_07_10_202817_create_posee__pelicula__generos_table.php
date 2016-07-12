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
            $table->integer('genero_id')->unsigned()->nullable();
            $table->integer('pelicula_id')->unsigned()->nullable();
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('set null');
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
        Schema::drop('posee__pelicula__generos');
    }
}
