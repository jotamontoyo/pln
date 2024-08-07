<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarAfiliacionIdSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'afiliacion_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'afiliacion_id');
    }
}