<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\BranchSeeder;
use Database\Seeders\RecruitmentSeeder;

echo "Seeding Database...\n";

RoleSeeder::run();
UserSeeder::run();
BranchSeeder::run();
RecruitmentSeeder::run();

echo "Database Seeding Completed.\n";
