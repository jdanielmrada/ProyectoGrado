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
             'mes'             => 'Enero', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Febrero', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Marzo', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Abril', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Mayo', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Junio', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Julio', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Agosto', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Septiembre', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Octubre', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Noviembre', 
         ]);
        DB::table('mes')->insert([
             'mes'             => 'Diciembre', 
         ]);
    }
}
