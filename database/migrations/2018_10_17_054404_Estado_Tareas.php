<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstadoTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Estado_Tareas',function(blueprint $table){
            $table->increments('id_EstTar');
            $table->string('EstadoTarea',100)->nullable(false)->changue();
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
        Schema::drop('Estado_Tareas');
    }
}
