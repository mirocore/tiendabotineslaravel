<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTienenColoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_tienen_colores', function (Blueprint $table) {
            $table->increments('id_productos_tienen_colores');
            $table->integer('id_producto')->unsigned();
            $table->integer('id_color')->unsigned();
            $table->timestamps();
            
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_color')->references('id_color')->on('colores');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_tienen_colores');
    }
}
