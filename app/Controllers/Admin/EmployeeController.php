<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmployeeController extends BaseController
{
    protected $userModel;
    protected $roleModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
        $this->roleModel = new \App\Models\RoleModel();
    }

    public function index() {
        $roleId = $this->request->getGet('role');

        $query = $this->userModel
            ->select('users.*, roles.role_name')
            ->join('roles', 'roles.id = users.role_id', 'left');

        if ($roleId) {
            $query->where('users.role_id', $roleId);
        }

        $users = $query->findAll();

        $data = [
            'title' => 'Employees',
            'active' => 'employees',
            'users' => $users,
            'roles' => $this->roleModel->findAll(),
            'selectedRole' => $roleId
        ];

        return view('admin/employees/employees', $data);
    }

    // ===============================
    // SHOW CREATE FORM
    // ===============================
    public function create()
    {
        return view('admin/employees/create_employees', [
            'title' => 'Add Employee',
            'active' => 'employees',
            'roles' => $this->roleModel->findAll()
        ]);
    }

    // ===============================
    // STORE EMPLOYEE
    // ===============================
    public function store()
    {
        $rules = [
            'fullname' => 'required',
            'username' => 'required|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'phone'    => 'required',
            'role_id'  => 'required|integer',
            'password' => 'required|min_length[6]',
            'img' => [
                'rules' => 'uploaded[img]|is_image[img]|mime_in[img,image/jpg,image/jpeg]',
                'errors' => [
                    'uploaded' => 'Image wajib diupload.',
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in'  => 'Format harus JPG atau JPEG.'
                ]
            ]
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/employees/create')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // HANDLE IMAGE
        $file = $this->request->getFile('img');
        $newName = null;

        if ($file && $file->isValid() && ! $file->hasMoved()) {

            $slug = url_title($this->request->getPost('fullname'), '-', true);
            $newName = $slug . '-' . time() . '.' . $file->getExtension();

            $file->move(FCPATH . 'uploads/users', $newName);
        }

        // INSERT
        $this->userModel->insert([
            'fullname' => $this->request->getPost('fullname'),
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'phone'    => $this->request->getPost('phone'),
            'role_id'  => $this->request->getPost('role_id'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'img'      => $newName
        ]);

        return redirect()
            ->to('/admin/employees')
            ->with('success', 'Employee berhasil ditambahkan.');
    }

    // ===============================
    // EDIT FORM
    // ===============================
    public function edit($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()
                ->to('/admin/employees')
                ->with('error', 'Employee tidak ditemukan.');
        }

        return view('admin/employees/edit_employees', [
            'title' => 'Edit Employee',
            'active' => 'employees',
            'user' => $user,
            'roles' => $this->roleModel->findAll()
        ]);
    }

    // ===============================
    // UPDATE
    // ===============================
    public function update($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/admin/employees')
                ->with('error', 'Employee tidak ditemukan.');
        }

        $rules = [
            'fullname' => 'required',
            'username' => "required|is_unique[users.username,id,{$id}]",
            'email'    => "required|valid_email|is_unique[users.email,id,{$id}]",
            'phone'    => 'required',
            'role_id'  => 'required|integer',
            'img'      => 'if_exist|is_image[img]|mime_in[img,image/jpg,image/jpeg,image/png]'
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to('/admin/employees/edit/' . $id)
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('img');
        $newName = $user['img'];

        if ($file && $file->isValid() && ! $file->hasMoved()) {

            if ($user['img'] && file_exists(FCPATH . 'uploads/employees/' . $user['img'])) {
                unlink(FCPATH . 'uploads/employees/' . $user['img']);
            }

            $slug = url_title($this->request->getPost('fullname'), '-', true);
            $newName = $slug . '-' . time() . '.' . $file->getExtension();

            $file->move(FCPATH . 'uploads/users', $newName);
        }

        $dataUpdate = [
            'fullname' => $this->request->getPost('fullname'),
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'phone'    => $this->request->getPost('phone'),
            'role_id'  => $this->request->getPost('role_id'),
            'img'      => $newName
        ];

        // OPTIONAL PASSWORD CHANGE
        if ($this->request->getPost('password')) {
            $dataUpdate['password'] = password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            );
        }

        $this->userModel->update($id, $dataUpdate);

        return redirect()
            ->to('/admin/employees')
            ->with('success', 'Employee berhasil diperbarui.');
    }

    // ===============================
    // DELETE
    // ===============================
    public function delete($id)
    {
        $user = $this->userModel->find($id);

        if (! $user) {
            return redirect()->to('/admin/employees')
                ->with('error', 'Employee tidak ditemukan.');
        }

        if ($user['img'] && file_exists(FCPATH . 'uploads/employees/' . $user['img'])) {
            unlink(FCPATH . 'uploads/employees/' . $user['img']);
        }

        $this->userModel->delete($id);

        return redirect()
            ->to('/admin/employees')
            ->with('success', 'Employee berhasil dihapus.');
    }
}
