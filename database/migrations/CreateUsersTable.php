<?php

namespace Database\Migrations;

use App\Models\DB;

class CreateUsersTable
{
    public static function up()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ";
        DB::getInstance()->exec($sql);
        echo "Users table created successfully.\n";
    }

    public static function down()
    {
        $sql = "DROP TABLE IF EXISTS users";
        DB::getInstance()->exec($sql);
        echo "Users table dropped successfully.\n";
    }
}