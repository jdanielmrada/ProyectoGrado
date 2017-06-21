<?php

use Illuminate\Database\Seeder;

class AlturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('altura_datas')->insert([
             'altura'             => '1,80', 
         ]);
    }
}
