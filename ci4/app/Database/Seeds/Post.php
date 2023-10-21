<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Post extends Seeder
{
    public function run()
    {
        $data = [
            
            'title' => 'computer',
            'description' => 'Post description1',
            'created_at' => date('d:m:Y'),
            'updated_at' => date('d:m:Y'),
                      
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO students (name, address) //VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('posts')->insert($data);
    }
}
