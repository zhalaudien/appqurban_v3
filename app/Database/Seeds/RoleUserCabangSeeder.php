<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleUserCabangSeeder extends Seeder
{
    public function run()
    {
        // === Insert Roles ===
        $roles = [
            ['name' => 'superadmin', 'description' => 'Akses penuh semua modul'],
            ['name' => 'adminpenerimaan', 'description' => 'Mengelola penerimaan hewan qurban'],
            ['name' => 'adminkandang', 'description' => 'Update data penyembelihan harian'],
            ['name' => 'admink3', 'description' => 'Kelola data kepala, kaki, kulit hewan'],
            ['name' => 'adminbesek', 'description' => 'Update produksi dan stok besek'],
            ['name' => 'admincabang', 'description' => 'Input pequrban dan permintaan cabang'],
            ['name' => 'adminbumm', 'description' => 'Lihat data pequrban dari BUMM'],
        ];
        $this->db->table('roles')->insertBatch($roles);

        // === Insert sample cabang ===
        $cabang = [
            'nama'         => 'Cabang Sragen Kota',
            'alamat'       => 'Jl. Raya Sragen No. 10',
            'ketua'        => 'Bpk. Ahmad',
            'ketua_hp'     => '081234567890',
            'panitia_nama' => 'Ust. Rahman',
            'panitia_hp'   => '081987654321',
            'perwakilan'   => 'Sragen',
            'created_at'   => date('Y-m-d H:i:s')
        ];
        $this->db->table('cabang')->insert($cabang);

        // === Insert Super Admin user ===
        $superAdmin = [
            'username'   => 'superadmin',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'nama'       => 'Super Admin',
            'no_hp'      => '0811111111',
            'role_id'    => 1, // Super Admin
            'cabang_id'  => null,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->db->table('users')->insert($superAdmin);
    }
}
