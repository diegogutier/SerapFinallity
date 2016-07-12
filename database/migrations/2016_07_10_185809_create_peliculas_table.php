<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('ano_lanzamiento');
            $table->string('descripcion');
            $table->string('idioma');
            $table->integer('Promedio_cal');
            $table->integer('precio');
            $table->integer('director_id')->unsigned()->nullable();
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('set null');
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
        Schema::drop('peliculas');
    }
}
