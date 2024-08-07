<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarGeneroAfiliados extends Migration
{
    public function up()
    {
        $this->forge->addColumn('afiliados', [
            'genero' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'after' => 'fecha_nacimiento'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('afiliados', 'genero');
    }
}