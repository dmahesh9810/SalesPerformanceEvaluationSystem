<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;

echo "Rolling Back Migrations...\n";

CreateUsersTable::down();

echo "Rollback Completed.\n";
