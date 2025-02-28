<?php 

namespace App\Models;
use App\Config\Database;
use PDO;
use PDOException;

class PatientsModels {

    private $conn;

    public function __construct() {

        $db = new Database();
        $this->conn = $db->conn();

    }

    public function getAllPatients() {
 
        try {

            $stmt = $this->conn->prepare("SELECT * FROM pacientes");
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            
            error_log("Erro ao buscar pacientes: " . $e->getMessage());
            return [];
        }

    }

}
