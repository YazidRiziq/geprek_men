<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\CategoryModel;

class MenuController extends BaseController
{
    protected $itemModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index() {
        $data = [
            'title' => 'Manage Menu',
            'active' => 'menu',
            'items' => $this->itemModel->findAll()
        ];

        return view('admin/menus/menus', $data);
    }
}
