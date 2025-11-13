<?php

function getRoleName($role_id)
{
    $roles = [
        1 => 'Super Admin',
        2 => 'Admin Penerimaan',
        3 => 'Admin Kandang',
        4 => 'Admin K3',
        5 => 'Admin Besek',
        6 => 'Admin Cabang',
        7 => 'Admin BUMM',
    ];

    return $roles[$role_id] ?? 'User';
}
