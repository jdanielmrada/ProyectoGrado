<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensualidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensualidads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ano_id')->unsigned();
            $table->integer('costo_id')->unsigned();

            $table->timestamps();

            $table->foreign('ano_id')->references('id')->on('anos')->onDelete('cascade');
            $table->foreign('costo_id')->references('id')->on('costos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mensualidads');
    }
}
