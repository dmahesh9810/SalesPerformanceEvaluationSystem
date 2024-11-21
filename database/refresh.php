<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;
use Database\Migrations\CreateBranchesTable;
use Database\Migrations\CreateRecruitmentsTable;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\BranchSeeder;
use Database\Seeders\RecruitmentSeeder;



echo "Refreshing Database...\n";

// Rollback migrations
CreateUsersTable::down();
CreateRolesTable::down();
CreateBranchesTable::down();
CreateRecruitmentsTable::down();

// Reapply migrations
CreateRolesTable::up();
CreateUsersTable::up();
CreateBranchesTable::up();
CreateRecruitmentsTable::up();


// Seed database
RoleSeeder::run();
UserSeeder::run();
BranchSeeder::run();
RecruitmentSeeder::run();

echo "Database Refresh Completed.\n";
