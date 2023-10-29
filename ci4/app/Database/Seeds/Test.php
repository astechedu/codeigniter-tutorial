<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Test extends Seeder
{
    public function run()
    {
      $this->call('Employee');
      $this->call('Student');        
    }
}


