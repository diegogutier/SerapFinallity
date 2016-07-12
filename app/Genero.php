<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $fillable = array(
        'nombre'
    );

    public function posee_Pelicula_Genero ()
    {
        return $this->hasMany('App\Posee_Pelicula_Genero','genero_id');
    }
}
