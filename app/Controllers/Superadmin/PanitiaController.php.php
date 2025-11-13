<?php

namespace App\Controllers\Superadmin;

use App\Controllers\BaseController;
use App\Models\PanitiaModel;
use App\Models\UserModel;
use App\Models\CabangModel;

class PanitiaController extends BaseController
{
    protected $panitiaModel;
    protected $userModel;
    protected $cabangModel;

    public function __construct()
    {
        $this->panitiaModel = new PanitiaModel();
        $this->userModel = new UserModel();
        $this->cabangModel = new CabangModel();
    }

    public function index()
    {
        $data['panitia'] = $this->panitiaModel->getPanitia();
        return view('superadmin/panitia/index', $data);
    }

    public function create()
    {
        $data['users'] = $this->userModel->where('role !=', 'superadmin')->findAll();
        $data['cabang'] = $this->cabangModel->findAll();
        return view('superadmin/panitia/create', $data);
    }

    public function store()
    {
        $rules = [
            'user_id' => 'required|is_not_unique[users.id]',
            'cabang_id' => 'required|is_not_unique[cabang.id]',
            'nama' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal');
        }

        $this->panitiaModel->insert($this->request->getPost());
        return redirect()->to('/superadmin/panitia')->with('success', 'Panitia berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['panitia'] = $this->panitiaModel->find($id);
        $data['users'] = $this->userModel->where('role !=', 'superadmin')->findAll();
        $data['cabang'] = $this->cabangModel->findAll();
        return view('superadmin/panitia/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'user_id' => 'required|is_not_unique[users.id]',
            'cabang_id' => 'required|is_not_unique[cabang.id]',
            'nama' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Validasi gagal');
        }

        $this->panitiaModel->update($id, $this->request->getPost());
        return redirect()->to('/superadmin/panitia')->with('success', 'Panitia berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->panitiaModel->delete($id);
        return redirect()->to('/superadmin/panitia')->with('success', 'Panitia berhasil dihapus');
    }
}
