<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Database\Migrations\CreateUsersTable;

echo "Running Migrations...\n";

try {
    CreateUsersTable::up();
} catch (\Exception $e) {
    echo "Migration failed: " . $e->getMessage() . "\n";
}
