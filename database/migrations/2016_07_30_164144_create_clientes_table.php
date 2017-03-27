<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula')->unique();
            $table->string('apellido');
            $table->string('nombre');
            $table->enum('sexo', ['Hombre','Mujer']);
            $table->string('antecedente');
            $table->string('telefono')->unique();
            $table->string('direction');
            $table->integer('user_id')->unsigned();
            $table->integer('inscripcion_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('clientes');
    }
}
