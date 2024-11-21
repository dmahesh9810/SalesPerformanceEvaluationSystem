<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;
use Database\Migrations\CreateBranchesTable;

echo "Rolling Back Migrations...\n";

CreateBranchesTable::down();
CreateUsersTable::down();
CreateRolesTable::down();

echo "Rollback Completed.\n";
