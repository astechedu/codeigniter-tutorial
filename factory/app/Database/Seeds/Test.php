<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Test extends Seeder
{
    public function run()
    {
           

        for($i=0;$i<10;$i++){ 

            $this->db->table('tests')->insert($this->generateTests());            
        }


/*
        for($i=0;$i<10;$i++){

            $data = [
                'name' => $faker->name,
            ];

            $this->db->table('tests')->insert($data);            
        }
*/

     /*   
        for($i=0;$i<10;$i++){
            $this->db->table('tests')->insert([

                'name' => $faker->name,
            ]);            
        }
     */

    }

        public function generateTests(): array {

           $faker = Factory::create();

           return [
              'name' => $faker->name,
           ];
        }


}
