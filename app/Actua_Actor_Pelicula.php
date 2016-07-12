<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actua_Actor_Pelicula extends Model
{

    public function Pelicula ()
    {
        return $this->belongsTo('App\Pelicula','pelicula_id');
    }

    public function actor ()
    {
        return $this->belongsTo('App\Actor','actor_id');
    }
}
