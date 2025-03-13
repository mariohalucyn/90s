<?php

namespace App\Initializers;

use Dotenv\Dotenv;

class Env {
    public $dotenv;

    public function __construct() {
        $this->dotenv = Dotenv::createImmutable(__DIR__ . '../../../');
        $this->dotenv->load();
    }
}