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
        'name', 'email', 'password','apellido','edad','genero1','genero2',
        'genero3','no_genero1','no_genero2','no_genero3','idioma1','idioma2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function califica_Pelicula_User ()
    {
        return $this->hasMany('App\Califica_Pelicula_User','user_id');
    }

    public  function arrienda_User_Pelicula()
    {
        return $this->hasMany('App\Arrienda_User_Pelicula','user_id');
    }
}
