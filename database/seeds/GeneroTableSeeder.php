<?php

use Illuminate\Database\Seeder;
use App\Genero;
class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Genero::create([
            'nombre' => 'Terror',
        ]);
        Genero::create([
            'nombre' => 'Comedia',
        ]);
        Genero::create([
            'nombre' => 'Romatica',
        ]);
        Genero::create([
            'nombre' => 'CiencieFiccion',
        ]);
        Genero::create([
            'nombre' => 'Aventura',
        ]);
    }
}
