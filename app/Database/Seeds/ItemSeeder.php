<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Item 1',
                'description' => 'Deskripsi item 1',
                'price' => 10000,
                'category_id' => 1,
                'img' => 'item1.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Item 2',
                'description' => 'Deskripsi item 2',
                'price' => 20000,
                'category_id' => 2,
                'img' => 'item2.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Item 3',
                'description' => 'Deskripsi item 3',
                'price' => 30000,
                'category_id' => 3,
                'img' => 'item3.jpg',
                'is_active' => false,
            ],
        ];

        foreach ($data as $item) {
            $this->db->table('items')->insert($item);
        }
    }
}
