<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoArchivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Tipo_Archivos', function(Blueprint $table){
            $table->increments('id_TipoArchivo');
            $table->string('NomTipoArchivo',200)->nullable(false)->change();
            $table->rememberToken();
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
        Schema::drop('Tipo_Archivos');
    }
}
