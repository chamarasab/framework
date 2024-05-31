<?php

namespace Core;

use PDO;

class Model {
    protected $db;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=my_framework';
        $username = 'root';
        $password = '';
        $this->db = new PDO($dsn, $username, $password);
    }
}
