<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoJuicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_Juicios', function(Blueprint $table){
            $table->increments('id_TipoJuicio');
            $table->string('NomTipoJuicio',200)->nullable(false)->change();
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
         Schema::drop('Tipo_Juicios');
    }
}
