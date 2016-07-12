<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'=>'juan',
            'apellido'=>'leal',
        ]);
    }
}
