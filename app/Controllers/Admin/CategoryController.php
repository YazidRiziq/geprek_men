<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    // LIST ALL CATEGORIES
    public function index() {
        $categories = $this->categoryModel
            ->select('categories.*, COUNT(items.id) as total_items')
            ->join('items', 'items.category_id = categories.id AND items.deleted_at IS NULL', 'left')
            ->groupBy('categories.id')
            ->findAll();

        $data = [
            'title' => 'Manage Categories',
            'active' => 'categories',
            'categories' => $categories,
        ];

        return view('admin/categories/categories', $data);
    }

    // FORM NEW CATEGORY
    public function create() {
        $data = [
            'title' => 'Create Category',
            'active' => 'categories',   
        ];
        
        return view('admin/categories/categoriescreate', $data);
    }

    // CREATE NEW CATEGORY
    public function store() {
        $rules = [
            'cat_name' => 'required',
            'description' => 'required',
        ];

        // Validate input
        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/categories/create')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->categoryModel->insert([
            'cat_name'        => $this->request->getPost('cat_name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()
            ->to('/admin/categories')
            ->with('success', 'Category berhasil ditambahkan.');
    }
    
    // FORM EDIT CATEGORY
    public function edit($id) {
        $category = $this->categoryModel->find($id);

        if (! $category) {
            return redirect()->to('/admin/categories')
                ->with('error', 'Category tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Category',
            'active' => 'categories',
            'category' => $category,
            'categories' => $this->categoryModel->findAll()
        ];

        return view('admin/categories/edit_category', $data);
    }

    // UPDATE CATEGORY
    public function update($id) {
        $category = $this->categoryModel->find($id);

        if (! $category) {
            return redirect()->to('/admin/categories')
                ->with('error', 'Category tidak ditemukan.');
        }

        $rules = [
            'cat_name' => 'required',
            'description' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/categories/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->categoryModel->update($id,[
            'cat_name' => $this->request->getPost('cat_name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()
            ->to('/admin/categories')
            ->with('success', 'Category berhasil diperbarui.');
    }

    // DELETE CATEGORY
    public function delete($id) {
        $category = $this->categoryModel->find($id);

        if (! $category) {
            return redirect()->to('/admin/categories')
                ->with('error', 'Category tidak ditemukan.');
        }

        $this->categoryModel->delete($id);

        return redirect()
            ->to('/admin/categories')
            ->with('success', 'Category berhasil dihapus.');
    }

}
