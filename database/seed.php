<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Seeders\UserSeeder;

echo "Seeding Database...\n";

UserSeeder::run();

echo "Database Seeding Completed.\n";
