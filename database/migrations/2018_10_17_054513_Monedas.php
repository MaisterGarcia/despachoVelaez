<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Monedas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('Monedas', function (Blueprint $table) {
                    $table->increments('IdTipoMoneda');
                    $table->string('NombreMoneda',50)->nullable(false)->changue();
                    $table->string('CodigoMoneda',15);
                    $table->string('SimboloMoneda',5);
                    $table->double('TasaDeCambioM');
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
        Schema::drop('Monedas');
    }
}
