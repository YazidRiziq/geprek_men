<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmployeeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manage Employees',
            'active' => 'employees',
        ];

        return view('admin/employees/employees', $data);
    }
}
