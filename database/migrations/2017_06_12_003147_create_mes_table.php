<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes');
            $table->timestamps();
        });
        //mensualidades & meses= mensualidad_mes

        Schema::create('mensualidad_mes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('mensualidad_id')->unsigned();
            $table->integer('mes_id')->unsigned();
            $table->timestamps();

            $table->foreign('mensualidad_id')->references('id')->on('mensualidads'); 
            $table->foreign('mes_id')->references('id')->on('mes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mes');
    }
}
