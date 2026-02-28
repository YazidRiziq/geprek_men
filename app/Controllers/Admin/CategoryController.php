<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CategoryController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new \App\Models\CategoryModel();
    }
    public function index()
    {
        $categories = $this->categoryModel->findAll();
        $data = [
            'title' => 'Manage Categories',
            'active' => 'categories',
            'categories' => $categories,
        ];
        
        return view('admin/categories/categories', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Category',
            'active' => 'categories',   
        ];
        
        return view('admin/categories/categoriescreate', $data);
    }

    public function store()
{
    $data = [
        'cat_name'    => $this->request->getPost('cat_name'),
        'description' => $this->request->getPost('description'),
    ];

    $this->categoryModel->insert($data);

    session()->setFlashdata('success', 'Category berhasil ditambahkan.');
    return redirect()->to('/admin/categories');
}
    
    public function edit($id)
    {
        $categoryModel = new \App\Models\CategoryModel();
        $data['category'] = $categoryModel->find($id);
        $data['title'] = 'Edit Category';
        $data['active'] = 'categories';
        return view('admin/categories/edit_category', $data);
    }

    public function update($id)
    {
        $this->categoryModel->update($id,[
            'cat_name' => $this->request->getPost('cat_name'),
            'description' => $this->request->getPost('description'),
        ]);
        session()->setFlashdata('success', 'Category berhasil diperbarui.');
        return redirect()->to('/admin/categories');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        session()->setFlashdata('success', 'Category berhasil dihapus.');
        return redirect()->to('/admin/categories');
    }

    
    



}
