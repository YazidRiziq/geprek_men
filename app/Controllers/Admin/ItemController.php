<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ItemModel;
use App\Models\CategoryModel;

class ItemController extends BaseController
{
    protected $itemModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Manage Menu',
            'items' => $this->itemModel->findAll()
        ];

        return view('admin/items/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Menu',
            'categories' => $this->categoryModel->findAll()
        ];

        return view('admin/items/create', $data);
    }

    public function store()
    {
        $this->itemModel->insert([
            'name'        => $this->request->getPost('name'),
            'price'       => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
        ]);

        return redirect()->to('/admin/items');
    }
}
