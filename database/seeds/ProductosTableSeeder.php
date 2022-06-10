<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'id_producto' => 1,
            'nombre' => 'Predator TF',
            'id_marca' =>1, 
            'precio' => '4199',
            'descripcion' => 'Los nuevos Botines adidas Predator 19.4 S TF, están diseñados con un talón anatómico para un ajuste de máxima comodidad. Además, su empeine se adhiere perfectamente a la pelota.',
            'imagen' => 'adidas1.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 1,
            'id_color' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 1,
            'id_color' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 1,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 1,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 1,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 1,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 2,
            'nombre' => 'Nemeziz Infantil',
            'precio' => '3599',
            'id_marca' =>1,
            'descripcion' => 'Para que los más pequeños puedan disfrutar su deporte favorito, lo podrán hacer con el nuevo modelo Botines adidas Nemeziz 19.4 IN Infantil. Hecho de material resistente y seguro.',
            'imagen' => 'adidas2.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 2,
            'id_color' => 8,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 2,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 2,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 2,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 2,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 2,
            'id_talle' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 3,
            'nombre' => 'Nemeziz 19.4 TF',
            'precio' => '4199',
            'id_marca' =>1,
            'descripcion' => 'Con los Botines adidas Nemeziz 19.4 TF, vas a convertirte en el más ágil de la cancha gracias a su suela que se adapta perfectamente al terreno de juego y a su capellada que brinda gran sujeción.',
            'imagen' => 'adidas3.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 3,
            'id_color' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 3,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 3,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 3,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 3,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 3,
            'id_talle' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);         
        DB::table('productos')->insert([
            'id_producto' => 4,
            'nombre' => 'Tango 18.4 Tf Infanti',
            'precio' => '2339',
            'id_marca' =>1,
            'descripcion' => 'Jugá como los mejores con los nuevos Botines adidas X Tango 18.4 Tf Infantil, con un diseño atrevido y moderno que te hará resaltar gracias a su confección tecnológica.',
            'imagen' => 'adidas4.jpg',
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 4,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 4,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 4,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 4,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 4,
            'id_talle' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);         
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 4,
            'id_color' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 4,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 5,
            'nombre' => 'Nike Jr. Bravata II FG Infantil',
            'precio' => '3099',
            'id_marca' =>2,
            'descripcion' => 'Con los nuevos Botines Nike Jr. Bravata II FG Infantil, los más chicos van a poder demostrar todas sus habilidades con el mayor confort y la mayor sujeción.',
            'imagen' => 'nike1.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 5,
            'id_color' => 01,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 5,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 5,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 5,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 5,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 6,
            'nombre' => 'Mercurial Superfly 7 Club IC Infantil',
            'precio' => '3999',
            'id_marca' =>2,
            'descripcion' => 'Disfrutá del futbol con los Botines Nike Mercurial Superfly 7 Club IC Infantil, la micro textura desde el talón hasta la puntera brinda el toque que necesita para la creatividad a altas velocidades.',
            'imagen' => 'nike2.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 6,
            'id_color' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 6,
            'id_color' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 6,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 6,
            'id_talle' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 6,
            'id_talle' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 7,
            'nombre' => 'React Phantom VSN Pro DF TF',
            'precio' => '8769',
            'id_marca' =>2,
            'descripcion' => 'Lleva tu potencial al máximo con los Botines Nike React Phantom VSN Pro DF TF. Para aquellos que entienden que los detalles hacen la diferencia',
            'imagen' => 'nike3.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 7,
            'id_color' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 7,
            'id_color' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 7,
            'id_talle' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 7,
            'id_talle' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 7,
            'id_talle' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 8,
            'nombre' => 'Maestro 700 FG Infantil',
            'precio' => '3099',
            'id_marca' =>3,
            'descripcion' => 'Disfrutá del futbol con los nuevos Botines Lotto Maestro 700 FG Infantil. Confeccionados en materiales que aportan excelente control y durabilidad.',
            'imagen' => 'lotto1.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 8,
            'id_color' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 8,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 8,
            'id_talle' => 15,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 8,
            'id_talle' => 16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 8,
            'id_talle' => 17,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 9,
            'nombre' => 'Spirit 500 TF Infantil',
            'precio' => '1999',
            'descripcion' => 'Te presentamos los nuevos Botines Lotto Spirit 500 TF Infantil, ideales para que los más chicos disfruten del futbol con un calzado cómodo y que aporta gran soporte.',
            'id_marca' =>3,
            'imagen' => 'lotto2.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 9,
            'id_color' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 9,
            'id_color' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 9,
            'id_talle' => 21,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 9,
            'id_talle' => 19,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 9,
            'id_talle' => 20,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 10,
            'nombre' => 'Maestro 700 TF Infantil',
            'precio' => '2999',
            'descripcion' => 'Disfrutá del futbol con los nuevos Botines Lotto Maestro 700 TF Infantil. Confeccionados en materiales que aportan excelente control y durabilidad.',
            'id_marca' =>3,
            'imagen' => 'lotto3.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 10,
            'id_color' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 10,
            'id_color' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 10,
            'id_talle' => 22,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 10,
            'id_talle' => 23,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 10,
            'id_talle' => 24,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 11,
            'nombre' => 'Future 4.4 FG',
            'precio' => '3799',
            'descripcion' => 'Conocé los nuevos Botines Puma Future 4.4 FG, están pensados para que puedas dar el máximo en la cancha y confeccionados para otorgar sujeción y duración.',
            'id_marca' =>5,
            'imagen' => 'puma1.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 11,
            'id_color' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 11,
            'id_color' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 11,
            'id_talle' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 11,
            'id_talle' => 15,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 11,
            'id_talle' => 16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 12,
            'nombre' => 'One 5.3 TT BADP',
            'precio' => '4799',
            'descripcion' => 'Con los nuevos Botines Puma One 5.3 TT BADP, demostrá quién es el mejor. Es un calzado pensado para ofrecer la mejor sujeción y el mayor confort en césped sintético.',
            'id_marca' =>5,
            'imagen' => 'puma2.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 12,
            'id_color' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 12,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 12,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 12,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 12,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 13,
            'nombre' => 'STY Speed Sonic Infantil',
            'precio' => '2099',
            'descripcion' => 'Los Botines Umbro STY Speed Sonic Infantil, son un calzado cómodo para que los más chicos disfruten del deporte en cualquier momento.',
            'id_marca' =>7,
            'imagen' => 'umbro1.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 13,
            'id_color' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 13,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 13,
            'id_talle' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 13,
            'id_talle' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 13,
            'id_talle' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 14,
            'nombre' => 'CPO Burn Infantil',
            'precio' => '1645',
            'descripcion' => 'Los Botines Umbro CPO Burn Infantil, son un calzado cómodo para que los más chicos disfruten del deporte en cualquier momento.',
            'id_marca' =>7,
            'imagen' => 'umbro2.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 14,
            'id_color' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 14,
            'id_color' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 14,
            'id_talle' => 10,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 14,
            'id_talle' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 14,
            'id_talle' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 15,
            'nombre' => 'Calibra II Infantil',
            'precio' => '2419',
            'descripcion' => 'Para que los más chicos jueguen como sus estrellas favoritas, llegaron los Botines Umbro Calibra II Infantil. Están diseñados con materiales resistentes y que aportan confort.',
            'id_marca' =>7,
            'imagen' => 'umbro3.jpg',
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 15,
            'id_talle' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 15,
            'id_talle' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 15,
            'id_talle' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 15,
            'id_color' => 7,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 15,
            'id_color' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
        DB::table('productos')->insert([
            'id_producto' => 16,
            'nombre' => 'Society Velox Infantil',
            'precio' => '2205',
            'descripcion' => 'Presentamos los nuevos Botines Umbro Society Velox Infantil, el calzado ideal para que los más pequeños tengan sus primeros contactos con la pelota y aprendan a dominarla de forma óptima.',
            'id_marca' =>7,
            'imagen' => 'umbro4.jpg',
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 16,
            'id_color' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_colores')->insert([
            'id_producto' => 16,
            'id_color' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 16,
            'id_talle' => 12,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 16,
            'id_talle' => 13,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('productos_tienen_talles')->insert([
            'id_producto' => 16,
            'id_talle' => 14,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);        
    }
}
