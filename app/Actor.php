<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
     public function Actua_Actor_Pelicula()
     {
         return $this->hasMany('app/Actua_Actor_Pelicula','actor_id');
     }
}
