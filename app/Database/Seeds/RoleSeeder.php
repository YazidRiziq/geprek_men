<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RoleModel;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roleModel = new RoleModel();

        $roleModel->insertBatch([
            [
                'role_name' => 'Admin',
                'description' => 'Administrator with full access',
            ],
            [
                'role_name' => 'Cashier',
                'description' => 'Cashier with limited access',
            ],
            [
                'role_name' => 'Chef',
                'description' => 'Chef with access to kitchen management',

            ],
            [
                'role_name' => 'Customer',
                'description' => 'Customer with access to order and profile management',
            ],
        ]);
    }
}
