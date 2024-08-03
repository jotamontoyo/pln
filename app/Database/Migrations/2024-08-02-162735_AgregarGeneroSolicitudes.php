<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarGeneroSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'genero' => [
                'type' => 'VARCHAR',
                'constraint' => 9,
                'after' => 'fecha_nacimiento'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'genero');
    }
}

