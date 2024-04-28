<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoAsientoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // EN LA FUNCION UP SE CREARA LA BASE DE DATOS QUE RECIBIRA LOS DATOS CORRESPONDIENTES
    public function up()
    {
        Schema::create('tipoAsiento', function(Blueprint $table){
            $table->id('idtipoAsiento');
            $table->string('descripcion', 50);
            $table->double('precio');
            $table->string('estado', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipoAsiento');
    }
}
