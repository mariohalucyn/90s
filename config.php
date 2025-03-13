<?php

require_once __DIR__ . "/src/Initializers/Env.php";
require_once __DIR__ . "/src/Initializers/Database.php";
require_once __DIR__ . "/src/Database/Migrations/CreateUsersTable.php";
require 'vendor/autoload.php';

use App\Initializers\Env;
use App\Initializers\Database;
use App\Models\CreateUsersTable;

new Env();
$db = Database::getInstance();
$mysqli = $db->getConnection();
$user = new CreateUsersTable($mysqli);
$user->up();