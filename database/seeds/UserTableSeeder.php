<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*truncamiento utilizado para poder ejecutar refresh sin eliminar los datos y generar nuevos*/
       DB::table('users')->insert([
            'email'             => 'jdani9417@gmail.com',
            'password'          => bcrypt('1234'),
            'role'              => 'admin',
            'dato_id'           => '1'
            
        ]);
       DB::table('users')->insert([
            'email'             => 'jdani19417@gmail.com',
            'password'          => bcrypt('1234'),
            'role'              => 'trainer',
            'dato_id'           => '1'
            
        ]);
       DB::table('users')->insert([
            'email'             => 'jdani29417@gmail.com',
            'password'          => bcrypt('1234'),
            'role'              => 'client',
            'dato_id'           => '1'
            
        ]);

        //factory(App\User::class, 49)->create();

    }
}
