<?php

namespace Database\Migrations;

use App\Models\DB;

class CreateBranchesTable
{
    public static function up()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS branches (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) UNIQUE NOT NULL,
                location VARCHAR(100) NOT NULL,
                manager_id INT NOT NULL,
                FOREIGN KEY (manager_id) REFERENCES users(id) ON DELETE CASCADE
            )
        ";
        DB::getInstance()->exec($sql);
        echo "branches table created successfully.\n";
    }

    public static function down()
    {
        $sql = "DROP TABLE IF EXISTS branches";
        DB::getInstance()->exec($sql);
        echo "branches table dropped successfully.\n";
    }
}
