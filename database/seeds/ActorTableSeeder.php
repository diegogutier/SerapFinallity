<?php

use Illuminate\Database\Seeder;
use App\Actor;
class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Actor::create([
            'nombre' => 'Christofher',
            'apellido' => 'Hopper',
            'weboficial' => 'www.pornogay.com',
        ]);

        Actor::create([
            'nombre' => 'Nicolas',
            'apellido' => 'Gonzalez',
            'weboficial' => 'www.google.cl',
        ]);

        Actor::create([
            'nombre' => 'Diego',
            'apellido' => 'Gutierrez',
            'weboficial' => 'www.Elplanetadelossimios.com',
        ]);

        Actor::create([
            'nombre' => 'Paulina',
            'apellido' => 'Silva',
            'weboficial' => 'www.Elplanetadelossimios2.com',
        ]);

        Actor::create([
            'nombre' => 'Alejandra',
            'apellido' => 'Castro',
            'weboficial' => 'www.Elplanetadelossimios3.com',
        ]);
    }
}
