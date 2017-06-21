 <?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
          $this->call('DatoTableSeeder');
          $this->call('AnoTableSeeder');
          $this->call('CotoTableSeeder');
          $this->call('UserTableSeeder');
          $this->call('MesTableSeeder');
          $this->call('PesoTableSeeder');
          $this->call('AlturaTableSeeder');

        Model::reguard();
    }
}
