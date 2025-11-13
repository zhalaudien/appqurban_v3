<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $role = (int) $session->get('role_id');
        $data = [
            'title' => 'Dashboard',
            'session' => $session->get(),
        ];

        switch ($role) {
            case 1:
                $view = 'dashboard/superadmin';
                break;
            case 2:
                $view = 'dashboard/admin_penerimaan';
                break;
            case 3:
                $view = 'dashboard/admin_kandang';
                break;
            case 4:
                $view = 'dashboard/admin_k3';
                break;
            case 5:
                $view = 'dashboard/admin_besek';
                break;
            case 6:
                $view = 'dashboard/admin_cabang';
                break;
            case 7:
                $view = 'dashboard/admin_bumm';
                break;
            default:
                $view = 'dashboard/superadmin';
        }

        echo view($view, $data);
    }
}
