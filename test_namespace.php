<?php

require_once __DIR__ . '/vendor/autoload.php';

use Database\Migrations\CreateUsersTable;

echo "File Exists: ";
var_dump(file_exists(__DIR__ . '/database/migrations/create_users_table.php'));

echo "Class Exists: ";
var_dump(class_exists(CreateUsersTable::class));
