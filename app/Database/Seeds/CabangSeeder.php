<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CabangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_cabang'   => 'Cabang Sragen',
                'alamat'        => 'Jl. Raya Sragen',
                'nama_ketua'    => 'H. Ahmad',
                'no_hp_ketua'   => '08123456789',
                'perwakilan'    => 'Sragen',
            ],
            [
                'nama_cabang'   => 'Cabang Karanganyar',
                'alamat'        => 'Jl. Adi Sumarmo',
                'nama_ketua'    => 'H. Yusuf',
                'no_hp_ketua'   => '08234567890',
                'perwakilan'    => 'Karanganyar',
            ],
        ];
        $this->db->table('cabang')->insertBatch($data);
    }
}
