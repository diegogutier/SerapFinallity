<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function Califica_Pelicula_User ()
    {
        return $this->hasMany('app/Califica_Pelicula_User','user_id');
    }

    public  function Arrienda_User_Pelicula()
    {
        return $this->hasMany('app/Arrienda_User_Pelicula','user_id');
    }
}
