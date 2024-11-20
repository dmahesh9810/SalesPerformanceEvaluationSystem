<?php

require_once __DIR__ . '/vendor/autoload.php';

use Database\Migrations\CreateUsersTable;

if (class_exists(CreateUsersTable::class)) {
    echo "Class CreateUsersTable loaded successfully.\n";
} else {
    echo "Class CreateUsersTable not found.\n";
}
