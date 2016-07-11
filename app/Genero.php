<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function Posee_Pelicula_Genero ()
    {
        return $this->hasMany('app/Posee_Pelicula_Genero','genero_id');
    }
}
