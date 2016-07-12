<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrienda_User_Pelicula extends Model
{
    protected $table = 'arrienda_actor_peliculas';
    protected $fillable = array(
        'fecha_termino'
    );

    public function pelicula()
    {
        return $this->belongsTo('App\pelicula','pelicula_id');
    }

    public function user ()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
