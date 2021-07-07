<?php

use Illuminate\Database\Seeder;

class PesoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peso_datas')->insert([
             'peso'             => '80', 
         ]);
    }
}
