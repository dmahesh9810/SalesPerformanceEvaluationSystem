<?php

namespace App\Models;

use App\Models\DB;  // Import the DB class

class User
{
    protected static $table = 'users';

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
    public static function create($data)
    {
        $keys = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        DB::query("INSERT INTO " . self::$table . " ($keys) VALUES ($values)", $data);
    
        return self::find(DB::lastInsertId());
    }
    public static function update($id, $data)
    {
        $sets = [];
        foreach ($data as $key => $value) {
            $sets[] = "$key = :$key";
        }
        $sets = implode(', ', $sets);
        $data['id'] = $id;
        DB::query("UPDATE " . self::$table . " SET $sets WHERE id = :id", $data);
        return self::find($id);
    }
    public static function delete($id)
    {
        return DB::query("DELETE FROM " . self::$table . " WHERE id = :id", ['id' => $id]);
    }
}
