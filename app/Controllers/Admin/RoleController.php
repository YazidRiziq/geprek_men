<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RoleModel;
use App\Models\UserModel;

class RoleController extends BaseController
{
    protected $roleModel;
    protected $userModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
        $this->userModel = new UserModel();
    }

    // LIST ALL ROLES
    public function index() 
    {
        $role = $this->roleModel
            ->select('roles.*, COUNT(users.id) as total_users')
            ->join('users', 'users.role_id = roles.id AND users.deleted_at IS NULL', 'left')
            ->groupBy('roles.id')
            ->findAll();

        $data = [
            'title' => 'Manage Roles',
            'active' => 'roles',
            'role' => $role,
        ];

        return view('admin/roles/roles', $data);
    }

    // FORM NEW ROLE
    public function create() {
        $data = [
            'title' => 'Create Role',
            'active' => 'roles',   
        ];
        
        return view('admin/roles/create_roles', $data);
    }

    // CREATE NEW ROLE
    public function store() {
        $rules = [
            'role_name' => 'required',
            'description' => 'required',
        ];

        // Validate input
        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/roles/create')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->roleModel->insert([
            'role_name'        => $this->request->getPost('role_name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()
            ->to('/admin/roles')
            ->with('success', 'Role berhasil ditambahkan.');
    }

    // FORM EDIT ROLE
    public function edit($id) {
        $role = $this->roleModel->find($id);

        if (! $role) {
            return redirect()->to('/admin/roles')
                ->with('error', 'Role tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Role',
            'active' => 'roles',
            'role' => $role,
        ];

        return view('admin/roles/edit_roles', $data);
    }

    // UPDATE ROLE
    public function update($id) {
        $role = $this->roleModel->find($id);

        if (! $role) {
            return redirect()->to('/admin/roles')
                ->with('error', 'Role tidak ditemukan.');
        }

        $rules = [
            'role_name' => 'required',
            'description' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/roles/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $this->roleModel->update($id,[
            'role_name' => $this->request->getPost('role_name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()
            ->to('/admin/roles')
            ->with('success', 'Role berhasil diperbarui.');
    }

    // DELETE ROLE
    public function delete($id) {
        $role = $this->roleModel->find($id);

        if (! $role) {
            return redirect()->to('/admin/roles')
                ->with('error', 'Role tidak ditemukan.');
        }

        // Hitung jumlah user/employee yang menggunakan role ini
        $totalUsers = $this->userModel
            ->where('role_id', $id)
            ->countAllResults();

        if ($totalUsers > 0) {
            return redirect()
                ->to('/admin/roles')
                ->with('error', 'Role tidak dapat dihapus karena masih digunakan oleh ' . $totalUsers . ' employee.');
        }

        $this->roleModel->delete($id);

        return redirect()
            ->to('/admin/roles')
            ->with('success', 'Role berhasil dihapus.');
    }
}
