<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "name" => "Admin",
                "username" => "admin",
                "email" => "admin@testing.com",
                "password" => password_hash("admin123", PASSWORD_DEFAULT)
            ],
            [
                "name" => "User",
                "username" => "user",
                "email" => "user@testing.com",
                "password" => password_hash("user123", PASSWORD_DEFAULT)
            ]
        ];

        $this->db->table("users")->insertBatch($data);
    }
}
