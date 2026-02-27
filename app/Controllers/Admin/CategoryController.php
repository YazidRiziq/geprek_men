<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manage Categories',
            'active' => 'categories',
        ];
        
        return view('admin/categories/categories', $data);
    }
}
