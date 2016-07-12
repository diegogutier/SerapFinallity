<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pelicula extends Model
{
    protected $table = 'peliculas';
        protected $fillable = array(
          'nombre','ano_lanzamito','descripcion','idioma','Promedio_cal','precio'
        );

    public function director()
    {
        return $this->belongsTo('App\Director');
    }

    public function actua_Actor_Pelicula()
    {
        return $this->hasMany('App\Actua_Actor_Pelicula','pelicula_id');
    }

    public function posee_Pelicula_Genero()
    {
        return $this->hasMany('App\Posee_Pelicula_Genero','pelicula_id');
    }

    public function califica_Pelicula_User()
    {
        return $this->hasMany('App\Califica_Pelicula_User','pelicula_id');
    }

    public function arrienda_User_Pelicula ()
    {
        return $this->hasMany('App\Arrienda_User_Pelicula','pelicula_id');
    }
}
