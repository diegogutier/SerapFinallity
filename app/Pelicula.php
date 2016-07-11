<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public function Director()
    {
        return $this->belongsTo('app/Director','director_id');
    }

    public function Actua_Actor_Pelicula()
    {
        return $this->hasMany('app/Actua_Actor_Pelicula','pelicula_id');
    }

    public function Posee_Pelicula_Genero()
    {
        return $this->hasMany('app/Posee_Pelicula_Genero','pelicula_id');
    }

    public function Califica_Pelicula_User()
    {
        return $this->hasMany('app/Califica_Pelicula_User','pelicula_id');
    }

    public function Arrienda_User_Pelicula ()
    {
        return $this->hasMany('app/Arrienda_User_Pelicula','pelicula_id');
    }
}
