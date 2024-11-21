<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;

echo "Rolling Back Migrations...\n";

CreateUsersTable::down();
CreateRolesTable::down();

echo "Rollback Completed.\n";
