<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Juzgados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Juzgados', function (Blueprint $table) {
                    $table->string('FolioJuzgado',50);
                    $table->primary('FolioJuzgado');
                    $table->string('Pais',6)->nullable(false)->changue();
                    $table->integer('No_Juzgado')->nullable(false)->changue();
                    $table->integer('id_TipoJuzgado')->unsigned();
                    $table->foreign('id_TipoJuzgado')->references('id_TipoJuzgado')->on('tipo_juzgados');
                    $table->string('Localizacion',255)->nullable(false)->changue();
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
        Schema::drop('Juzgados');
    }
}
