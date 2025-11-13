<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // ✅ gunakan variabel lokal, bukan $this->userModel
        $user = $userModel
            ->select('users.*, roles.name as role')
            ->join('roles', 'roles.id = users.role_id')
            ->where('username', $username)
            ->first();

        if ($user && password_verify($password, $user['password'])) {

            // Set session sesuai hasil join (roles.nama)
            session()->set([
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'role'       => $user['role'],   // harus string: superadmin, admincabang, dst.
                'isLoggedIn' => true
            ]);

            // Redirect sesuai role
            switch ($user['role']) {
                case 'superadmin':
                    return redirect()->to('/superadmin/cabang');
                case 'admincabang':
                    return redirect()->to('/dashboard');
                default:
                    return redirect()->to('/dashboard');
            }
        }

        return redirect()->back()->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function unauthorized()
    {
        return view('errors/custom_unauthorized', [
            'message' => 'Anda tidak memiliki akses ke halaman ini.'
        ]);
    }
}
