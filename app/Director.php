<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public function Pelicula()
    {
        return $this->hasMany('app/Pelicula','director_id');
    }
}
