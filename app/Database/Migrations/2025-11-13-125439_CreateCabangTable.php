<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCabangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'             => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nama'           => ['type' => 'VARCHAR', 'constraint' => 150],
            'alamat'         => ['type' => 'TEXT', 'null' => true],
            'ketua'          => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'ketua_hp'       => ['type' => 'VARCHAR', 'constraint' => 30, 'null' => true],
            'panitia_nama'   => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'panitia_hp'     => ['type' => 'VARCHAR', 'constraint' => 30, 'null' => true],
            'perwakilan'     => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cabang');
    }

    public function down()
    {
        $this->forge->dropTable('cabang');
    }
}
