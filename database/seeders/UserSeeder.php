<?php

namespace Database\Seeders;

use App\Models\DB;

class UserSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");

        $data = [
            ['name' => 'John Doex', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ];

        foreach ($data as $user) {
            $stmt->execute($user);
        }

        echo "Users seeded successfully.\n";
    }
}
