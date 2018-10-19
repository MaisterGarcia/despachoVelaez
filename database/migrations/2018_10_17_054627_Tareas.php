<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tareas', function(Blueprint $table){
            $table->increments('id_Tarea');
            $table->string('NomTarea',200)->nullable(false)->change();
            $table->date('FechaLimite')->nullable(false)->change();
            $table->date('FechaFin')->nullable(false)->change();
            $table->string('num_folio');
            $table->foreign('num_folio')->references('num_folio')->on('Abogados');
            $table->integer('id_EstTar')->unsigned();
            $table->foreign('id_EstTar')->references('id_EstTar')->on('Estado_Tareas');
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
        Schema::drop('Tareas');
    }
}
