<?php

namespace Database\Migrations;

use App\Models\DB;

class CreateRolesTable
{
    public static function up()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS roles (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) UNIQUE NOT NULL
            )
        ";
        DB::getInstance()->exec($sql);
        echo "roles table created successfully.\n";
    }

    public static function down()
    {
        $sql = "DROP TABLE IF EXISTS roles";
        DB::getInstance()->exec($sql);
        echo "roles table dropped successfully.\n";
    }
}
