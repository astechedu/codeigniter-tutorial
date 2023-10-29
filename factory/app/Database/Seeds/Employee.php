<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Employee extends Seeder
{
    public function run()
    {

      for($i=0;$i<10;$i++){

           $data = [
              'name' => 'employee'.$i, 'address' => 'employee address'.$i
           ];

           $this->db->table('employees')->insert($data);

      }
    }
}
