<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name'=>'Nicolas',
           'apellido'=>'Oyarce',
           'email'=>'pension@hotmail.cl',
           'password'=>'321344',
           'edad'=>23,
           'genero1'=>'Comedia',
           'genero2'=>'aventura',
           'genero3'=>'Gore',
           'no_genero1'=>'Terror',
           'no_genero2'=>'accion',
           'no_genero3'=>'Porno',
           'idioma1'=>'Aleman',
           'idioma2'=>'Español',
       ]);

        User::create([
            'name'=>'Hans',
            'apellido'=>'Bucker',
            'email'=>'hans@gmail.com',
            'password'=>'123456667',
            'edad'=>23,
           'genero1'=>'Terror',
           'genero2'=>'Comedia',
           'genero3'=>'Aventura',
           'no_genero1'=>'Accion',
           'no_genero2'=>'Romantico',
           'no_genero3'=>'Nose',
           'idioma1'=>'Español',
           'idioma2'=>'English',
       ]);

        User::create([
            'name'=>'Juan',
            'apellido'=>'Mantegazza',
            'email'=>'italianboy@gmail.com',
            'password'=>'988334',
            'edad'=>25,
            'genero1'=>'Terror',
            'genero2'=>'Comedia',
            'genero3'=>'Aventura',
            'no_genero1'=>'Accion',
            'no_genero2'=>'Romantico',
            'no_genero3'=>'Porno',
            'idioma1'=>'Español',
            'idioma2'=>'English',
        ]);

        User::create([
            'name'=>'Mauricio',
            'apellido'=>'Leal',
            'email'=>'Mauleal@gmail.com',
            'password'=>'1234',
            'edad'=>23,
            'genero1'=>'Terror',
            'genero2'=>'Gore',
            'genero3'=>'sangre',
            'no_genero1'=>'Accion',
            'no_genero2'=>'Romantico',
            'no_genero3'=>'Aventura',
            'idioma1'=>'Español',
            'idioma2'=>'English',
        ]);
    }
}
