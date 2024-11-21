<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Database\Migrations\CreateUsersTable;
use Database\Migrations\CreateRolesTable;
use Database\Migrations\CreateBranchesTable;
use Database\Migrations\CreateRecruitmentsTable;


echo "Rolling Back Migrations...\n";

CreateBranchesTable::down();
CreateRecruitmentsTable::down();
CreateUsersTable::down();
CreateRolesTable::down();

echo "Rollback Completed.\n";
