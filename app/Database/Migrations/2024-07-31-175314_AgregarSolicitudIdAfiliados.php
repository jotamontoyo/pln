<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarFechasSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('afiliados', [
            'solicitud_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('afiliados', 'solicitud_id');
    }
}
