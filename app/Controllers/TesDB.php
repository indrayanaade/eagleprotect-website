<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestDb extends Controller
{
    public function index()
    {
        try {
            $db = Database::connect();
            $query = $db->query('SELECT DATABASE() AS dbname');
            $result = $query->getRow();

            if ($result && $result->dbname) {
                echo "✅ Database connected successfully!<br>";
                echo "Current Database: " . $result->dbname;
            } else {
                echo "❌ Connected, but database not selected or empty.";
            }
        } catch (\Throwable $e) {
            echo "❌ Database connection error:<br>" . $e->getMessage();
        }
    }
}
