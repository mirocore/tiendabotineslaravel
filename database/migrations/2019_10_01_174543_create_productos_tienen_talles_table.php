<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTienenTallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_tienen_talles', function (Blueprint $table) {
            $table->increments('id_productos_tienen_talles');
            $table->integer('id_producto')->unsigned();
            $table->integer('id_talle')->unsigned();
            $table->timestamps();
            
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_talle')->references('id_talle')->on('talles'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_tienen_talles');
    }
}
