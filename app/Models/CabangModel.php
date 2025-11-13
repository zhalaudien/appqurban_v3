<?php

namespace App\Models;

use CodeIgniter\Model;

class CabangModel extends Model
{
    protected $table = 'cabang';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_cabang',
        'alamat',
        'nama_ketua',
        'no_hp_ketua',
        'nama_panitia',
        'no_hp_panitia',
        'perwakilan'
    ];
    protected $useTimestamps = true;
}
