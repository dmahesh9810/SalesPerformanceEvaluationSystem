<?php

namespace Database\Seeders;

use App\Models\DB;

class UserSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO users (name, email,mobile,password,agent_code,status,role_id) VALUES (:name, :email,:mobile,:password,:agent_code,:status,:role_id)");

        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'mobile' => '1234567890',
                'password' => '1234',
                'agent_code' => 'AGT001',
                'status' => 'active',
                'role_id' => 1
            ],
        ];

        foreach ($data as $user) {
            $stmt->execute($user);
        }

        echo "Users seeded successfully.\n";
    }
}
