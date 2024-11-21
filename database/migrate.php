<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;
use Database\Migrations\CreateBranchesTable;
use Database\Migrations\CreateRecruitmentsTable;

echo "Running Migrations...\n";

try {
    CreateRolesTable::up();
    CreateUsersTable::up();
    CreateBranchesTable::up();
    CreateRecruitmentsTable::up();
} catch (\Exception $e) {
    echo "Migration failed: " . $e->getMessage() . "\n";
}
