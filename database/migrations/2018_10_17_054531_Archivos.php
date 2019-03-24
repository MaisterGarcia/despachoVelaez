<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Archivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Archivos',function(blueprint $table){
            $table->increments('id_Archivo');
            $table->string('NomArchivo',40)->nullable(false)->changue();
            $table->date('FechaCreacion')->nullable(false)->changue();
            $table->date('FechaVencimiento');
            $table->integer('Version')->nullable(false)->changue();
            $table->integer('id_TipoArchivo')->unsigned();
            $table->foreign('id_TipoArchivo')->references('id_TipoArchivo')->on('Tipo_Archivos');
            $table->string('URL',255);
            $table->string('activo',3);
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
        Schema::drop('Archivos');
    }
}
