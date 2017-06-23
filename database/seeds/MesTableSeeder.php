<?php

use Illuminate\Database\Seeder;

class MesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mes')->insert([
             'mes'             => 'Enero 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Febrero 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Marzo 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Abril 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Mayo 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Junio 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Julio 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Agosto 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Septiembre 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Octubre 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Noviembre 2017', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Diciembre 2017', 
         ]);
    }
}
