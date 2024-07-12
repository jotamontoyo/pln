<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarFechasSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'created_at' => [
                'type' => 'DATETIME',
                'after' => 'posicion'
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'after' => 'created_at'
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'after' => 'updated_at'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'deleted_at');
        $this->forge->dropColumn('solicitudes', 'updated_at');
        $this->forge->dropColumn('solicitudes', 'created_at');
    }
}