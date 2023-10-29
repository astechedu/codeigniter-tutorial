<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Student extends Seeder
{
    public function run()
    {

      for($i=0;$i<10;$i++){

           $data = [
              'name' => 'name'.$i, 'address' => 'address'.$i
           ];

           $this->db->table('students')->insert($data);

      }



        //Query 
       // $this->db->query('insert into users(username, email) values(:username, :email)',$data);

        //Using query builder
        //$this->db->table('students')->insert($data);
           

    }
}
