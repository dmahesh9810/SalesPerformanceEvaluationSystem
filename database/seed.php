<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;

echo "Seeding Database...\n";

RoleSeeder::run();
UserSeeder::run();

echo "Database Seeding Completed.\n";
