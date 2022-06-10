<?php

use Illuminate\Database\Seeder;

class ColoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colores')->insert([
            'id_color' => 1,
            'nombre' => 'Blanco',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 2,
            'nombre' => 'Azul',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 3,
            'nombre' => 'Amarillo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 4,
            'nombre' => 'Naranja',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 5,
            'nombre' => 'Rojo',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 6,
            'nombre' => 'Gris',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 7,
            'nombre' => 'Violeta',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 8,
            'nombre' => 'Rosa',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 9,
            'nombre' => 'Verde',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 10,
            'nombre' => 'Negro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('colores')->insert([
            'id_color' => 11,
            'nombre' => 'Celeste',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);          
    }
}
