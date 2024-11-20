<?php

namespace Database\Seeders;

use App\Models\DB;

class UserSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO users (name, email,password) VALUES (:name, :email,:password)");

        $data = [
            ['name' => 'John Doex', 'email' => 'john@example.com','password'=>'1234'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com','password'=>'1234'],
        ];

        foreach ($data as $user) {
            $stmt->execute($user);
        }

        echo "Users seeded successfully.\n";
    }
}
