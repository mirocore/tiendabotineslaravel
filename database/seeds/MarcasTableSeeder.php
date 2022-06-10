<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'id_marca' => 1,
            'nombre' => 'Adidas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 2,
            'nombre' => 'Nike',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 3,
            'nombre' => 'Lotto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 4,
            'nombre' => 'Penalty',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 5,
            'nombre' => 'Puma',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 6,
            'nombre' => 'Topper',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('marcas')->insert([
            'id_marca' => 7,
            'nombre' => 'Umbro',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);         
    }
}
