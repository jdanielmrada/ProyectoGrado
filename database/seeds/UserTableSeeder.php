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
            'name'             => 'wilmer Ramirez',
            'email'             => 'ramirez@gmail.com',
            'password'         => bcrypt('1234'),
            'role'  => 'Administrador',
            
        ]);

        //factory(App\User::class, 49)->create();

    }
}
