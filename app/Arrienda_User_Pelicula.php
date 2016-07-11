<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arrienda_User_Pelicula extends Model
{
    public function Pelicula()
    {
        return $this->belongsTo('app/Pelicula','pelicula_id');
    }

    public function User ()
    {
        return $this->belongsTo('app/User','user_id');
    }
}
