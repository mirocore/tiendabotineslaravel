<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MarcasTableSeeder::class);
        $this->call(TallesTableSeeder::class);
        $this->call(ColoresTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
    }
}
