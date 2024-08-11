<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarDepartamentoIdMunicipios extends Migration
{
    public function up()
    {
        $this->forge->addColumn('municipios', [
            'departamento_codigo' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'after' => 'id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('municipios', 'departamento_codigo');
    }
}