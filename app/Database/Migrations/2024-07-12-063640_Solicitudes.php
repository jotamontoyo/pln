<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Solicitudes extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'afiliado_id' => [
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
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => false
            ],
            'cedula' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'unique' => true,
                'null' => true
            ],
            'cedula_img' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
            'pasaporte' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'unique' => true,
                'null' => true
            ],
            'licencia' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'unique' => true,
                'null' => true
            ],
            'residencia' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'unique' => true,
                'null' => true
            ],
            'otra_identificacion' => [
                'type' => 'VARCHAR',
                'constraint' => 11,
                'unique' => true,
                'null' => true
            ],
            'otra_identificacion_tipo' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'ciudad' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'pais' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'whatsapp' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'email' => [
                'type' => 'INT',
                'constraint' => 50
            ],
            'afiliado' => [
                'type' => 'BOOLEAN',
                'null' => true
            ],
            'cargo' => [
                'type' => 'BOOLEAN',
                'null' => true
            ],
            'posicion' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('solicitudes');
    }




    public function down()
    {
        $this->forge->dropTable('solicitudes');
    }
}
