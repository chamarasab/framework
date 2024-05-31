<?php

namespace App\Models;

use Core\Model;

class ExampleModel extends Model {
    public function getData() {
        $stmt = $this->db->query("SELECT * FROM example_table");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC); // Use \PDO to reference the global namespace
    }
}
