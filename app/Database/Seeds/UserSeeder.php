<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            $userModel->insert([
                'username' => $faker->unique()->userName(),
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'fullname' => $faker->name(),
                'email' => $faker->email(),
                'phone' => $faker->phoneNumber(),
                'role_id' => rand(1, 4),
            ]);
        }
    }
}
