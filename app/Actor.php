<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';
    protected $fillable=array(
        'nombre','apellido','weboficial'
    );
     public function Actua_Actor_Pelicula()
     {
         return $this->hasMany('App\Actua_Actor_Pelicula','actor_id');
     }
}
