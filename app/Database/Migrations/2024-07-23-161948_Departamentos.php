<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departamentos extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'codigo' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'unique' => true,
                'null' => false
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]

        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('departamentos');
    }




    public function down()
    {
        $this->forge->dropTable('departamentos');
    }
}
