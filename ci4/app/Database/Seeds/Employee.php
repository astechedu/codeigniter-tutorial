<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Employee extends Seeder
{
    public function run()
    {

        for ($i = 0; $i < 10; $i++) { 
            //to add 10 users. Change limit as desired
            $this->db->table('employees')->insert($this->generateUsers());
        }

        // Simple Queries
        //$this->db->query('INSERT INTO students (name, address) //VALUES(:username:, :email:)', $data);

        // Using Query Builder
        //$this->db->table('students')->insert($data);

    }

       private function generateUsers(): array
       {
            $faker = Factory::create();
            return [
                'name' => $faker->name(),
                'address' => $faker->email
            ];
        }


}
