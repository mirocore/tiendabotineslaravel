<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdMarcaColumnToProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table() permite editar un schema.
        Schema::table('productos', function (Blueprint $table) {
            $table->integer('id_marca')->unsigned()->after('id_producto');

            $table->foreign('id_marca')->references('id_marca')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            // Dropeamos la columna.
            $table->dropForeign(['id_marca']);
            $table->dropColumn('id_marca');
        });
    }
}
