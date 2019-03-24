<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Abogados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Abogados',function(Blueprint $table){
            $table->string('num_folio',200);
            $table->primary('num_folio');
            $table->string('NomAbogado',40)->nullable(false)->changue();
            $table->string('AppAbogado',40)->nullable(false)->changue();
            $table->string('ApmAbogado',40)->nullable(false)->changue();
            $table->integer('edad');
            $table->string('sexo',2)->nullable(false)->changue();
            $table->string('email',255)->nullable(false)->changue();
            $table->integer('telefono')->nullable(false)->changue();
            $table->string('EstadoCivil',100);
            $table->integer('id_est')->unsigned();
            $table->foreign('id_est')->references('id_est')->on('Estados')->onDelete('cascade');
            $table->integer('id_mun')->unsigned();
            $table->foreign('id_mun')->references('id_mun')->on('Municipios')->onDelete('cascade');
            $table->integer('IdTipoAbogado')->unsigned();
            $table->foreign('IdTipoAbogado')->references('IdTipoAbogado')->on('Tipo_Abogados')->onDelete('cascade');
            $table->string('Archivo',250);
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
        Schema::drop('Abogados');
    }
}
