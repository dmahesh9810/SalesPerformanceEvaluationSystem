<?php

namespace Database\Seeders;

use App\Models\DB;

class RoleSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO roles (name) VALUES (:name)");

        $data = [
            ['name' => 'admin'],
            ['name' => 'manager'],
            ['name' => 'supervisor'],
            ['name' => 'Advisors'],
            ['name' => 'team_leader'],
            ['name' => 'sales_agents'],
            ['name' => 'Cashier'],
        ];

        foreach ($data as $user) {
            $stmt->execute($user);
        }

        echo "roles seeded successfully.\n";
    }
}
