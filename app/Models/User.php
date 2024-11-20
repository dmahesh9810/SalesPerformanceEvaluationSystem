<?php

namespace App\Models;

use App\Models\DB;  // Import the DB class

class User
{
    public static function all()
    {
        $db = DB::getInstance();  // Get the DB instance

        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll();
    }

    public static function find($id)
    {
        $db = DB::getInstance();  // Get the DB instance

        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
