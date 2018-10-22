<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoAbogados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Tipo_Abogados', function(Blueprint $table){
            $table->increments('idTipoAbogado');
            $table->string('TipoAbogado',255)->nullable(false)->changue();
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
         Schema::drop('Tipo_Abogados');
    }
}
