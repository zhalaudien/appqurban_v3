<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Unauthorized extends BaseController
{
    public function index()
    {
        return view('errors/custom_unauthorized');
    }
}
