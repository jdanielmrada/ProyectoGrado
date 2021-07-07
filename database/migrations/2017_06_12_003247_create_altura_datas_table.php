<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlturaDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altura_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('altura');
            $table->timestamps();
        });
        //Alturas & Detalles de alturas= altura_detalles

        Schema::create('altura_altura_data', function(Blueprint $table){
            $table->increments('id');
            $table->integer('altura_id')->unsigned();
            $table->integer('altura_data_id')->unsigned();
            $table->timestamps();

            $table->foreign('altura_id')->references('id')->on('alturas'); 
            $table->foreign('altura_data_id')->references('id')->on('altura_datas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('altura_datas');
    }
}
