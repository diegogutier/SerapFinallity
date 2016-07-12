<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';
        protected $fillable = array(
          'nombre', 'apellido'
        );

    public function pelicula()
    {
        return $this->hasMany('App\Pelicula','director_id');
    }
}
