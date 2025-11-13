<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCabangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'auto_increment' => true],
            'nama_cabang'       => ['type' => 'VARCHAR', 'constraint' => '100'],
            'alamat'            => ['type' => 'TEXT', 'null' => true],
            'nama_ketua'        => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'no_hp_ketua'       => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true],
            'nama_panitia'      => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'no_hp_panitia'     => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => true],
            'perwakilan'        => ['type' => 'ENUM("Sragen","Karanganyar")', 'null' => true],
            'created_at'        => ['type' => 'DATETIME', 'null' => true],
            'updated_at'        => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cabang');
    }

    public function down()
    {
        $this->forge->dropTable('cabang');
    }
}
