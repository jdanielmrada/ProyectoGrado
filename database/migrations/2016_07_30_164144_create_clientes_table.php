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
            $table->integer('telefono_id')->unsigned();
            $table->string('direction');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('telefono_id')->references('id')->on('telefonos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
