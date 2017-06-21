<?php

use Illuminate\Database\Seeder;

class AnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anos')->insert([
            'name'             => '2017',
        ]);

        DB::table('anos')->insert([
            'name'             => '2018',
        ]);
    }
}
