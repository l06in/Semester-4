<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends seeder
{
    public function run()
    {
        $data = [
            'name' => 'Tomy Syafrudin',
            'address' => 'Jl Gus Dur no 150 Jombang',
            'created_at' => Time::now(),
            'update_at' => Time::now()
        ];
        //[
        //    'name' => 'Agus Setiawan',
        //    'address' => 'Jl Merdeka no 150 Jombang',
        //    'created_at' => Time::now(),
        //    'update_at' => Time::now()
        //];
        [
            'name' => 'Kang Emil',
            'address' => 'Jl Pattimura no 150 Jombang',
            'created_at' => Time::now(),
            'update_at' => Time::now()
        ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
           $data = [
                'name' => $faker->name,
                'address' => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'update_at' => Time::now()
            ];
          // $this->db->query('INSERT INTO penulis(name, address, created_at, updated_at)VALUES(:name:, :address:, ::created_at, :updated_at:)',$data);
            $this->db->table('penulis')->insertbatch($data);
        }
    }
}