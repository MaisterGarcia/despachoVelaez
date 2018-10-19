<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Materias', function (Blueprint $table){
            $table->increments('id_materia');
            $table->string('NomMateria',255)->nullable(false)->changue();
            $table->date('DiaFinalizacion')->nullable(false)->changue();
            $table->integer('id_Submateria')->unsigned(); 
            $table->foreign('id_Submateria')->references('id_Submateria')->on('submaterias');
            $table->integer('id_EstTar')->unsigned(); 
            $table->foreign('id_EstTar')->references('id_EstTar')->on('Estado_Tareas');
            $table->string('num_folio',200); 
            $table->foreign('num_folio')->references('num_folio')->on('Abogados');
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
        Schema::drop('Materias');
    }
}
