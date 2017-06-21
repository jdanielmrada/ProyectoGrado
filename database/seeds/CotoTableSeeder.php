<?php

use Illuminate\Database\Seeder;

class CotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('costos')->insert([
            'name'             => '3000',
        ]);

        DB::table('anos')->insert([
            'name'             => '15000',
        ]);
    }
}
