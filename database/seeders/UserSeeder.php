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
                'name' => 'Mahesh Dissanayaka',
                'email' => 'mahesh@gmail.com',
                'mobile' => '1234567890',
                'password' => '1234',
                'agent_code' => 'AGT001',
                'status' => 'active',
                'role_id' => 1
            ],
            [
                'name' => 'Sachi Herath',
                'email' => 'sachi@gmail.com',
                'mobile' => '1234567891',
                'password' => '1234',
                'agent_code' => 'AGT002',
                'status' => 'active',
                'role_id' => 2
            ],
            [
                'name' => 'Ishu Uma',
                'email' => 'ishu@gmail.com',
                'mobile' => '1234567892',
                'password' => '1234',
                'agent_code' => 'AGT003',
                'status' => 'active',
                'role_id' => 3
            ],
            [
                'name' => 'Shashika Nuwan',
                'email' => 'shashika@gmail.com',
                'mobile' => '1234567893',
                'password' => '1234',
                'agent_code' => 'AGT004',
                'status' => 'active',
                'role_id' => 4
            ],
            [
                'name' => 'Gayan Sampath',
                'email' => 'gayan@gmail.com',
                'mobile' => '1234567894',
                'password' => '1234',
                'agent_code' => 'AGT005',
                'status' => 'active',
                'role_id' => 5
            ],
            [
                'name' => 'Gihan Kavishka',
                'email' => 'gihan@gmail.com',
                'mobile' => '1234567895',
                'password' => '1234',
                'agent_code' => 'AGT006',
                'status' => 'active',
                'role_id' => 6
            ],
            [
                'name' => 'Supun Gamlath',
                'email' => 'supun@gmail.com',
                'mobile' => '1234567896',
                'password' => '1234',
                'agent_code' => 'AGT007',
                'status' => 'active',
                'role_id' => 7
            ],
        ];

        foreach ($data as $user) {
            $stmt->execute($user);
        }

        echo "Users seeded successfully.\n";
    }
}
