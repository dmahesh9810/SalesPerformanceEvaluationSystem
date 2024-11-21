<?php

namespace Database\Seeders;

use App\Models\DB;

class RecruitmentSeeder
{
    public static function run()
    {
        $db = DB::getInstance();
        $stmt = $db->prepare("INSERT INTO recruitment (recruit_user_id,recruit_by_user_id) VALUES (:recruit_user_id,:recruit_by_user_id)");

        $data = [
            ['recruit_user_id' => 3,'recruit_by_user_id'=>2],
            ['recruit_user_id' => 4,'recruit_by_user_id'=>3],
            ['recruit_user_id' => 6,'recruit_by_user_id'=>4]
        ];

        foreach ($data as $branches) {
            $stmt->execute($branches);
        }

        echo "roles seeded successfully.\n";
    }
}
