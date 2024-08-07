<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarEstadoMunicipioDepartamentoAfiliados extends Migration
{
    public function up()
    {
        $this->forge->addColumn('afiliados', [
            'estado_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'otra_identificacion_tipo'
            ],
            'departamento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'estado_id'
            ],
            'municipio_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'departamento_id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('afiliados', 'municipio_id');
        $this->forge->dropColumn('afiliados', 'departamento_id');
        $this->forge->dropColumn('afiliados', 'estado_id');
    }
}
