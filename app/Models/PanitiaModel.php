<?php

namespace App\Models;

use CodeIgniter\Model;

class PanitiaModel extends Model
{
    protected $table = 'panitia';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'cabang_id',
        'nama',
        'no_hp',
        'seksi',
        'status'
    ];
    protected $useTimestamps = true;

    public function getPanitia($id = null)
    {
        $builder = $this->select('panitia.*, users.username, users.role, cabang.nama_cabang')
            ->join('users', 'users.id = panitia.user_id', 'left')
            ->join('cabang', 'cabang.id = panitia.cabang_id', 'left');
        if ($id) {
            return $builder->where('panitia.id', $id)->first();
        }
        return $builder->findAll();
    }
}
