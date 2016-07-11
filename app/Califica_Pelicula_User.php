<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Califica_Pelicula_User extends Model
{
    public function Pelicula ()
    {
        return $this->belongsTo('app/Pelicula','Pelciula_id');
    }

    public function User()
    {
        return $this->belongsTo('app/User','user_id');
    }
}
