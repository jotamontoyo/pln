<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarUserIdAfiliados extends Migration
{
    public function up()
    {
        $this->forge->addColumn('afiliados', [
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'after' => 'id'
            ]
        ]);
    }





    public function down()
    {
        $this->forge->dropColumn('afiliados', 'user_id');
    }
}
