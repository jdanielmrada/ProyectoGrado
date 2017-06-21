<?php

use Illuminate\Database\Seeder;

class DatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos')->insert([
            'name'              => 'José Mejias',
            'cedula'            => '25448714',
            'sexo'          	=> 'masculino',
            'telefono'          => '04144754603',
            'direction'         => 'Cagua'
            
        ]);
    }
}
