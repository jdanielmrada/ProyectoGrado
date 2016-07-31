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
        DB::table('users')->truncate();
 
        factory(App\User::class)->create([
            'name'=> 'jose',
            'email'=> 'jdani9417@gmail.com',
            'role'=> 'admind',
            'password'=> 'admind'

            ]);

        factory(App\User::class, 49)->create();

    }
}
