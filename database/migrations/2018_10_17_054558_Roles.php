<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Roles', function (Blueprint $table) {
            $table->increments('id_Rol');
            $table->string('TipoRol',100)->nullable(false)->changue();
            $table->integer('num_juicio')->unsigned(); 
            $table->foreign('num_juicio')->references('num_juicio')->on('Juicios');
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
        Schema::drop('Roles');
    }
}
