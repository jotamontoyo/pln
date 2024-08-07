<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarDocsSolicitudes extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'tipo_doc' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'after' => 'otra_identificacion_tipo'
            ],
            'numero_doc' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'after' => 'tipo_doc'
            ],
            'expedicion_doc' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'after' => 'numero_doc'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'expedicion_doc');
        $this->forge->dropColumn('solicitudes', 'numero_doc');
        $this->forge->dropColumn('solicitudes', 'tipo_doc');
    }
}
