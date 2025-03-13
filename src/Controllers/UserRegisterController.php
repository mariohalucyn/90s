<?php

use App\Initializers\Database;

$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $firstName = trim('firstName');
    $lastName = trim('lastName');
    $email = strtolower(trim('email'));

    $db = Database::getInstance();
    $mysqli = $db->getConnection();
    var_dump($mysqli);
}