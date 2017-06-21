<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesoDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peso_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peso');
            $table->timestamps();
        });
        //Pesos & Detalles del peso= peso_detalles

        Schema::create('peso_peso_data', function(Blueprint $table){
            $table->increments('id');
            $table->integer('peso_id')->unsigned();
            $table->integer('peso_data_id')->unsigned();
            $table->timestamps();

            $table->foreign('peso_id')->references('id')->on('pesos'); 
            $table->foreign('peso_data_id')->references('id')->on('peso_datas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peso_datas');
    }
}
