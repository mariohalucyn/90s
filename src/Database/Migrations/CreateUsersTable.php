<?php

namespace App\Models;

use mysqli;

class CreateUsersTable
{
    private mysqli $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function up() {
        $stmt = $this->mysqli->prepare("
            CREATE TABLE IF NOT EXISTS users (
                id INT(255) AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(255) NOT NULL,
                last_name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ");
        $stmt->execute();
        $stmt->close();
    }

    public function down() {
        $stmt = $this->mysqli->prepare("DROP TABLE IF EXISTS users");
        $stmt->execute();
        $stmt->close();
    }
}
