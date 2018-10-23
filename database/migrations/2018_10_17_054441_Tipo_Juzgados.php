<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoJuzgados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tipo_Juzgados', function(Blueprint $table){
            $table->increments('id_TipoJuzgado');
            $table->string('TipoJuzgado',150)->nullable(false)->changue();
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
         Schema::drop('Tipo_Juzgados');
    }
}
