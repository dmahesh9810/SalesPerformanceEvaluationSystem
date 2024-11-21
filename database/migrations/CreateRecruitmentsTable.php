<?php

namespace Database\Migrations;

use App\Models\DB;

class CreateRecruitmentsTable
{
    public static function up()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS recruitment (
                id INT AUTO_INCREMENT PRIMARY KEY,
                recruit_user_id int UNIQUE NOT NULL,
                recruit_by_user_id int NOT NULL,
                recruit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (recruit_user_id) REFERENCES users(id) ON DELETE CASCADE,
                FOREIGN KEY (recruit_by_user_id) REFERENCES users(id) ON DELETE CASCADE
            )
        ";
        DB::getInstance()->exec($sql);
        echo "Recruitment table created successfully.\n";
    }

    public static function down()
    {
        $sql = "DROP TABLE IF EXISTS recruitment";
        DB::getInstance()->exec($sql);
        echo "Recruitment table dropped successfully.\n";
    }
}
