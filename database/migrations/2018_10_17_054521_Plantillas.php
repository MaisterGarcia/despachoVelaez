<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Plantillas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Plantillas', function (Blueprint $table) {
            $table->increments('IdPlantilla');
            $table->string('NomPlantilla',255)->nullable(false)->changue();
            $table->date('FecheDeCreacion')->nullable(false)->changue(); 
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
        Schema::drop('Plantillas');
    }
}
