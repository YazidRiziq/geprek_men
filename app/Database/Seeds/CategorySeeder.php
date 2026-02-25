<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CategoryModel;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categoryModel = new CategoryModel();
        $categoryModel->insertBatch([
            [
                'cat_name' => 'Makanan',
                'description' => 'Kategori makanan',
            ],
            [
                'cat_name' => 'Minuman',
                'description' => 'Kategori minuman',
            ]
        ]);
    }
}
