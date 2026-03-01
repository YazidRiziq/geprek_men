<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();
        
        $users = [
            [
                'username' => 'YazidRiziq',
                'email' => 'yazidriziq@gmail.com',  
                'password' => password_hash('yazid123', PASSWORD_DEFAULT),
                'fullname' => 'Yazid Riziq',
                'phone' => '081234567890',
                'img' => 'yazid_riziq.jpg',
                'role_id' => 1,
            ],
            [
                'username' => 'NaufalNadi',
                'email' => 'naufalnadi@gmail.com',
                'password' => password_hash('naufal123', PASSWORD_DEFAULT),
                'fullname' => 'Naufal Nadi',
                'phone' => '081234567891',
                'img' => 'naufal_nadi.jpg',
                'role_id' => 2,
            ],
            [
                'username' => 'MifratulPutri',
                'email' => 'mifratulputri@gmail.com',
                'password' => password_hash('mifratul123', PASSWORD_DEFAULT),
                'fullname' => 'Mifratul Putri',
                'phone' => '081234567892',
                'img' => 'mifratul_putri.jpg',
                'role_id' => 3,
            ],
            [
                'username' => 'ElvianiSyahputri',
                'email' => 'elvianisyahputri@gmail.com',
                'password' => password_hash('elviani123', PASSWORD_DEFAULT),
                'fullname' => 'Elviani Syahputri',
                'phone' => '081234567893',
                'img' => 'elviani_syahputri.jpg',
                'role_id' => 4,
            ]
        ];

        foreach ($users as $user) {
            $userModel->insert($user);
        }
    }
}
