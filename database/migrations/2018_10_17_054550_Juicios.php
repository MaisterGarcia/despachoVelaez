<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Juicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Juicios',function(blueprint $table){
            $table->increments('num_juicio');
            $table->string('NomDemandante',255);
            $table->integer('id_TipoJuicio')->unsigned();
            $table->foreign('id_TipoJuicio')->references('id_TipoJuicio')->on('Tipo_Juicios');
            $table->date('FechaDemanda')->nullable(false)->changue();
            $table->date('FechaAuditoria');
            $table->integer('id_cte')->unsigned();
            $table->foreign('id_cte')->references('id_cte')->on('Clientes')->onDelete('cascade');
            $table->string('num_folio',200);
            $table->foreign('num_folio')->references('num_folio')->on('Abogados')->onDelete('cascade');
            $table->integer('id_Archivo')->unsigned();
            $table->foreign('id_Archivo')->references('id_Archivo')->on('Archivos')->onDelete('cascade');
            $table->string('FolioJuzgado',50);
            $table->foreign('FolioJuzgado')->references('FolioJuzgado')->on('Juzgados')->onDelete('cascade');
            $table->string('archivo',255);
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
        Schema::drop('Juicios');
    }
}
