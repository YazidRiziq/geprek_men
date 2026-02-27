<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class OrderController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Manage Orders',
            'active' => 'orders',
        ];
        
        return view('admin/orders/orders', $data);
    }
}
