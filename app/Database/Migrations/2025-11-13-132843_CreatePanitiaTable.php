<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePanitiaTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'auto_increment' => true],
            'user_id'      => ['type' => 'INT'],
            'cabang_id'    => ['type' => 'INT'],
            'nama'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'no_hp'        => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true],
            'seksi'        => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'status'       => ['type' => 'ENUM("Koordinator","Anggota")', 'default' => 'Anggota'],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('cabang_id', 'cabang', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('panitia');
    }

    public function down()
    {
        $this->forge->dropTable('panitia');
    }
}
