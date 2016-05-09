<?php

use Illuminate\Database\Seeder;

class UsertableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 49)->create();
        factory(App\User::class)->create([
        	'name'=> 'jose'
        	'role'=> 'admind'

        	])
    }
}
