<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actua_Actor_Pelicula extends Model
{
    public function Pelicula ()
    {
        return $this->belongsTo('app/Pelicula','pelicula_id');
    }

    public function Actor ()
    {
        return $this->belongsTo('app/Actor','actor_id');
    }
}
