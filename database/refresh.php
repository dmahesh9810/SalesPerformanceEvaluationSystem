<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;

echo "Refreshing Database...\n";

// Rollback migrations
CreateUsersTable::down();
CreateRolesTable::down();

// Reapply migrations
CreateRolesTable::up();
CreateUsersTable::up();

// Seed database
RoleSeeder::run();
UserSeeder::run();

echo "Database Refresh Completed.\n";
