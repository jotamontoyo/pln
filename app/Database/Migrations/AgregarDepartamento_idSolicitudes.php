<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarDepartamento_idSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'departamento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'estado_id'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'departamento_id');
    }
}
