<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posee_Pelicula_Genero extends Model
{
    protected $table = 'posee_pelicula_generos';

    public function pelicula ()
    {
        return $this->belongsTo('App\pelicula','pelicula_id');
    }

    public function genero()
    {
        return $this->belongsTo('App\Genero','genero_id');
    }
}
