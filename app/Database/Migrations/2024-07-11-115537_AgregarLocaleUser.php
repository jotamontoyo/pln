<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregarLocaleUser extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'locale' => [
                'type' => 'VARCHAR',
                'constraint' => 2,
                'after' => 'active'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'locale');
    }

}
