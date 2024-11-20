<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Seeders\UserSeeder;

echo "Refreshing Database...\n";

// Rollback migrations
CreateUsersTable::down();

// Reapply migrations
CreateUsersTable::up();

// Seed database
UserSeeder::run();

echo "Database Refresh Completed.\n";
