<?php

namespace Database\Seeders;

use App\Models\DB;

class BranchSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO branches (name,location,manager_id) VALUES (:name,:location,:manager_id)");

        $data = [
            ['name' => 'admin','location'=>'buttala','manager_id'=>1]
        ];

        foreach ($data as $branches) {
            $stmt->execute($branches);
        }

        echo "roles seeded successfully.\n";
    }
}
