<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarFechaNacimientoEdadEstadoCiudad extends Migration
{
    public function up()
    {
        $this->forge->addColumn('solicitudes', [
            'fecha_nacimiento' => [
                'type' => 'DATETIME',
                'after' => 'apellidos'
            ],
            'edad' => [
                'type' => 'INT',
                'constraint' => 3,
                'after' => 'fecha_nacimiento'
            ],
            'estado_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'otra_identificacion_tipo'
            ],
            'departamento_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'estado_id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('solicitudes', 'municipio_id');
        $this->forge->dropColumn('solicitudes', 'estado_id');
        $this->forge->dropColumn('solicitudes', 'edad');
        $this->forge->dropColumn('solicitudes', 'fecha_nacimiento');
    }
}