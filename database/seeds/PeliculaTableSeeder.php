<?php

use Illuminate\Database\Seeder;
use App\Pelicula;
class PeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelicula::create([
            'nombre'=>'Avengers',
            'ano_lanzamiento'=>'2010-10-20',
            'descripcion'=>'caca para todos',
            'idioma'=>'Español',
            'Promedio_cal'=>2,
            'precio'=>100,
            'director_id'=>1,
        ]);

        Pelicula::create([
            'nombre'=>'Avengers2',
            'ano_lanzamiento'=>'2013-10-20',
            'descripcion'=>'caca para todos y el simio',
            'idioma'=>'Español',
            'Promedio_cal'=>3,
            'precio'=>1000,
            'director_id'=>2,
        ]);

        Pelicula::create([
            'nombre'=>'El Planeta de los simios',
            'ano_lanzamiento'=>'2013-10-20',
            'descripcion'=>'animales',
            'idioma'=>'Español',
            'Promedio_cal'=>2,
            'precio'=>10,
            'director_id'=>2,
        ]);

        Pelicula::create([
            'nombre'=>'Transformers',
            'ano_lanzamiento'=>'2006-10-20',
            'descripcion'=>'La mejor pelicula de todas',
            'idioma'=>'Español',
            'Promedio_cal'=>5,
            'precio'=>5000,
            'director_id'=>3,
        ]);
    }
}
