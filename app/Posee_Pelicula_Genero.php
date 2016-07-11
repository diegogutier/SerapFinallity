<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posee_Pelicula_Genero extends Model
{
    public function Pelicula ()
    {
        return $this->belongsTo('app/Pelicula','pelicula_id');
    }

    public function Genero()
    {
        return $this->belongsTo('app/Genero','genero_id');
    }
}
