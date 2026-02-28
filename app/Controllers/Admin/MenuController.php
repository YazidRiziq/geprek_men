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

    // List all menu items with optional category filter
    public function index() {
        $categoryId = $this->request->getGet('category');

        $query = $this->itemModel
            ->select('items.*, categories.cat_name')
            ->join('categories', 'categories.id = items.category_id');

        if ($categoryId) {
            $query->where('items.category_id', $categoryId);
        }

        $items = $query->findAll();

        $data = [
            'title' => 'Manage Menu',
            'active' => 'menu',
            'items' => $items,
            'categories' => $this->categoryModel->findAll(),
            'currentCategory' => $categoryId
        ];

        return view('admin/menus/menus', $data);
    }

    // Show create form
    public function create() {
        $data = [
            'title' => 'Add New Menu',
            'active' => 'menu',
            'categories' => $this->categoryModel->findAll()
        ];

        return view('admin/menus/create_menus', $data);
    }
    
    // Create new menu
    public function store() {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|integer',
            'img' => [
                'rules' => 'uploaded[img]|is_image[img]|mime_in[img,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Image wajib diupload.',
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in'  => 'Format harus JPG atau JPEG.'
                ]
            ]
        ];

        // Validate input
        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/menu/create')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Handle file upload
        $file = $this->request->getFile('img');
        if ($file->isValid() && ! $file->hasMoved()) {
            $menuName = url_title($this->request->getPost('name'), '-', true);
            $newName  = $menuName . '-' . time() . '.' . $file->getExtension();

            $file->move(FCPATH . 'uploads/items', $newName);
        }

        $this->itemModel->insert([
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
            'img'         => $newName,
            'is_active'   => true
        ]);

        return redirect()
            ->to('/admin/menu')
            ->with('success', 'Menu berhasil ditambahkan.');
    }

    // Show edit form
    public function edit($id) {
        $item = $this->itemModel->find($id);

        if (! $item) {
            return redirect()->to('/admin/menu')
                ->with('error', 'Menu tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Menu',
            'active' => 'menu',
            'item' => $item,
            'categories' => $this->categoryModel->findAll()
        ];

        return view('admin/menus/edit_menus', $data);
    }

    // Update menu
    public function update($id)
    {
        $item = $this->itemModel->find($id);

        if (! $item) {
            return redirect()->to('/admin/menu')
                ->with('error', 'Menu tidak ditemukan.');
        }

        $rules = [
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required|numeric',
            'category_id' => 'required|integer',
            'img'         => 'if_exist|is_image[img]|mime_in[img,image/jpg,image/jpeg]'
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/menu/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('img');
        $newName = $item['img']; // default pakai gambar sebelumnya

        if ($file && $file->isValid() && ! $file->hasMoved()) {

            // hapus file sebelumnya jika ada
            if ($item['img'] && file_exists(FCPATH . 'uploads/items/' . $item['img'])) {
                unlink(FCPATH . 'uploads/items/' . $item['img']);
            }

            $menuName = url_title($this->request->getPost('name'), '-', true);
            $newName  = $menuName . '-' . time() . '.' . $file->getExtension();

            $file->move(FCPATH . 'uploads/items', $newName);
        }

        $this->itemModel->update($id, [
            'name'        => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'category_id' => $this->request->getPost('category_id'),
            'img'         => $newName,
            'is_active'   => $this->request->getPost('is_active')
        ]);

        return redirect()
            ->to('/admin/menu')
            ->with('success', 'Menu berhasil diperbarui.');
    }

    // Delete menu
    public function delete($id) {
        $item = $this->itemModel->find($id);

        if (! $item) {
            return redirect()->to('/admin/menu')
                ->with('error', 'Menu tidak ditemukan.');
        }

        // hapus file gambar jika ada
        if ($item['img'] && file_exists(FCPATH . 'uploads/items/' . $item['img'])) {
            unlink(FCPATH . 'uploads/items/' . $item['img']);
        }

        $this->itemModel->delete($id);

        return redirect()->to('/admin/menu')
            ->with('success', 'Menu berhasil dihapus.');
    }
}
