<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensualidadessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensualidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pago');
            $table->integer('inscripcion_id')->unsigned();
            $table->timestamps();

            $table->foreign('inscripcion_id')->references('id')->on('inscripciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mensualidades');
    }
}
