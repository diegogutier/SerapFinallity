<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Califica_Pelicula_User extends Model
{
    protected $table = 'califica_pelicula_users';
    protected $fillable = array(
        'calificacion'
    );

    public function pelicula ()
    {
        return $this->belongsTo('App\pelicula','Pelciula_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
