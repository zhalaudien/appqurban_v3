<?php

namespace App\Controllers\Superadmin;

use App\Controllers\BaseController;
use App\Models\CabangModel;

class CabangController extends BaseController
{
    protected $cabangModel;

    public function __construct()
    {
        $this->cabangModel = new CabangModel();
    }

    public function index()
    {
        $data['title'] = 'Manajemen Cabang';
        $data['cabang'] = $this->cabangModel->findAll();

        return view('superadmin/cabang/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Cabang';
        return view('superadmin/cabang/create', $data);
    }

    public function store()
    {
        $rules = [
            'nama_cabang' => 'required|min_length[3]|is_unique[cabang.nama_cabang]',
            'nama_ketua'  => 'required',
            'no_hp_ketua' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->cabangModel->save([
            'nama_cabang'  => $this->request->getPost('nama_cabang'),
            'alamat'       => $this->request->getPost('alamat'),
            'nama_ketua'   => $this->request->getPost('nama_ketua'),
            'no_hp_ketua'  => $this->request->getPost('no_hp_ketua'),
            'nama_panitia' => $this->request->getPost('nama_panitia'),
            'no_hp_panitia' => $this->request->getPost('no_hp_panitia'),
            'perwakilan'   => $this->request->getPost('perwakilan'),
        ]);

        return redirect()->to('/superadmin/cabang')->with('success', 'Cabang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Cabang';
        $data['cabang'] = $this->cabangModel->find($id);

        return view('superadmin/cabang/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama_cabang' => 'required|min_length[3]',
            'nama_ketua'  => 'required',
            'no_hp_ketua' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->cabangModel->update($id, [
            'nama_cabang'  => $this->request->getPost('nama_cabang'),
            'alamat'       => $this->request->getPost('alamat'),
            'nama_ketua'   => $this->request->getPost('nama_ketua'),
            'no_hp_ketua'  => $this->request->getPost('no_hp_ketua'),
            'nama_panitia' => $this->request->getPost('nama_panitia'),
            'no_hp_panitia' => $this->request->getPost('no_hp_panitia'),
            'perwakilan'   => $this->request->getPost('perwakilan'),
        ]);

        return redirect()->to('/superadmin/cabang')->with('success', 'Cabang berhasil diperbarui!');
    }

    public function delete($id)
    {
        $this->cabangModel->delete($id);
        return redirect()->to('/superadmin/cabang')->with('success', 'Cabang berhasil dihapus!');
    }
}
