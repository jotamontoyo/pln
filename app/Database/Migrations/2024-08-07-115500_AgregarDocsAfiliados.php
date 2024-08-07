<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarDocsAfiliados extends Migration
{
    public function up()
    {
        $this->forge->addColumn('afiliados', [
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
        $this->forge->dropColumn('afiliados', 'expedicion_doc');
        $this->forge->dropColumn('afiliados', 'numero_doc');
        $this->forge->dropColumn('afiliados', 'tipo_doc');
    }
}

