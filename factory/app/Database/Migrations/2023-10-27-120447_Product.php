<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
            ],  
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],                      
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],  
            'created_at datetime default current_timestamp',  
            'updated_at datetime default current_timestamp on update current_timestamp'                     
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
