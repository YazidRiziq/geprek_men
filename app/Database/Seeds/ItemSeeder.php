<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ItemModel;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $itemModel = new ItemModel();

        $data = [
            [
                'name' => 'Ayam Geprek Original',
                'description' => 'Ayam crispy digeprek dengan sambal bawang pedas.',
                'price' => 28000,
                'category_id' => 1,
                'img' => 'ayam_geprek.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Geprek Keju',
                'description' => 'Ayam geprek dengan topping keju mozzarella.',
                'price' => 32000,
                'category_id' => 1,
                'img' => 'ayam_geprek_keju.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Geprek Sambal Matah',
                'description' => 'Ayam crispy dengan sambal matah khas Bali.',
                'price' => 30000,
                'category_id' => 1,
                'img' => 'ayam_geprek_sambal_matah.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Bakar Madu',
                'description' => 'Ayam bakar dengan saus madu manis gurih.',
                'price' => 35000,
                'category_id' => 1,
                'img' => 'ayam_bakar_madu.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Bakar Taliwang',
                'description' => 'Ayam bakar pedas khas Lombok.',
                'price' => 36000,
                'category_id' => 1,
                'img' => 'ayam_bakar_taliwang.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Crispy BBQ',
                'description' => 'Ayam crispy dengan saus barbeque.',
                'price' => 30000,
                'category_id' => 1,
                'img' => 'ayam_crispy_bbq.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Crispy Blackpepper',
                'description' => 'Ayam crispy dengan saus lada hitam.',
                'price' => 31000,
                'category_id' => 1,
                'img' => 'ayam_crispy_blackpepper.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Ayam Saus Teriyaki',
                'description' => 'Ayam goreng dengan saus teriyaki manis.',
                'price' => 33000,
                'category_id' => 1,
                'img' => 'ayam_saus_teriyaki.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Es Teh Manis',
                'description' => 'Teh manis dingin segar.',
                'price' => 8000,
                'category_id' => 2,
                'img' => 'es_teh_manis.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Es Jeruk',
                'description' => 'Perasan jeruk segar dengan es batu.',
                'price' => 10000,
                'category_id' => 2,
                'img' => 'es_jeruk.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Lemon Tea',
                'description' => 'Teh dengan campuran lemon segar.',
                'price' => 12000,
                'category_id' => 2,
                'img' => 'lemon_tea.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Thai Tea',
                'description' => 'Minuman teh khas Thailand dengan susu.',
                'price' => 15000,
                'category_id' => 2,
                'img' => 'thai_tea.jpg',
                'is_active' => true,
            ],
            [
                'name' => 'Air Mineral',
                'description' => 'Air mineral botol 600ml.',
                'price' => 6000,
                'category_id' => 2,
                'img' => 'air_mineral.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($data as $item) {
            $itemModel->insert($item);
        }
    }
}
