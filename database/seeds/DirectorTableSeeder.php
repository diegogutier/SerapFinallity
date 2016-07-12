<?php

use Illuminate\Database\Seeder;
use App\Director;
class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Director::create([
            'nombre' => 'Victor',
            'apellido' => 'Cea',
        ]);

        Director::create([
            'nombre' => 'Victor',
            'apellido' => 'Tardon',
        ]);

        Director::create([
            'nombre' => 'Alfredo',
            'apellido' => 'Paredes',
        ]);
    }
}
