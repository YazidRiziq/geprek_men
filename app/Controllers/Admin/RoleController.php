<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RoleController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manage Roles',
            'active' => 'roles',
        ];
        
        return view('admin/roles/roles', $data);
    }
}
