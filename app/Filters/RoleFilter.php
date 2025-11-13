<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $userRole = $session->get('role');
        $allowedRoles = $arguments ?? [];

        if (!in_array($userRole, $allowedRoles)) {
            // ✅ gunakan getUri() juga kalau ingin log route
            $path = $request->getUri()->getPath();
            log_message('error', "Unauthorized access to {$path}");
            return redirect()->to('/unauthorized');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
