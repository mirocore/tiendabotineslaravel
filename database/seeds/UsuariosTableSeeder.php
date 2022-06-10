<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Usuario::create([
            'nombre' => 'Ramiro',
            'apellido' => 'Belcore',
            'email' => 'belcore@gmail.com',
            'password' => Hash::make('global')
        ]);
        \App\Models\Usuario::create([
            'nombre' => 'Aquiles',
            'apellido' => 'Vaesa',
            'email' => 'aquilesvaesa@gmail.com',
            'password' => Hash::make('laravelmanda')
        ]);
        \App\Models\Usuario::create([
            'nombre' => 'Susana',
            'apellido' => 'Horia',
            'email' => 'susanahoria@gmail.com',
            'password' => Hash::make('laravelmanda')
        ]);        
    }
}
