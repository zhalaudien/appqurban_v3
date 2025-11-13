<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            $pass = $user['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $sessionData = [
                    'user_id'   => $user['id'],
                    'nama'      => $user['nama'],
                    'username'  => $user['username'],
                    'role_id'   => $user['role_id'],
                    'cabang_id' => $user['cabang_id'],
                    'logged_in' => TRUE
                ];
                $session->set($sessionData);

                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'User tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
