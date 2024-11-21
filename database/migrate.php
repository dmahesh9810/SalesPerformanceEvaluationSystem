<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;

echo "Running Migrations...\n";

try {
    CreateRolesTable::up();
    CreateUsersTable::up();
} catch (\Exception $e) {
    echo "Migration failed: " . $e->getMessage() . "\n";
}
