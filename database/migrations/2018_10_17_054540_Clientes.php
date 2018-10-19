<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes',function(blueprint $table){
            $table->increments('id_cte');
            $table->string('NomCliente',100)->nullable(false)->changue();
            $table->string('AppCliente',100)->nullable(false)->changue();
            $table->string('ApmCliente',100)->nullable(false)->changue();
            $table->integer('edad');
            $table->string('sexo',1)->nullable(false)->changue();
            $table->string('email',255)->nullable(false)->changue();
            $table->integer('Telefono')->nullable(false)->changue();
            $table->string('EstadoCivilCte',100);
            $table->integer('id_est')->unsigned();
            $table->foreign('id_est')->references('id_est')->on('Estados');
            $table->integer('id_mun')->unsigned();
            $table->foreign('id_mun')->references('id_mun')->on('Municipios');
            $table->string('num_folio',200);
            $table->foreign('num_folio')->references('num_folio')->on('Abogados')->onDelete('cascade');
            $table->integer('id_TipoArchivo')->unsigned();
            $table->foreign('id_TipoArchivo')->references('id_TipoArchivo')->on('tipo_archivos');
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
        Schema::drop('Clientes');
    }
}
