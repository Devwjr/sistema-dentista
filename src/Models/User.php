<?php

namespace src\Models;

use PDO;
use App\Config\Database;

class User {
    private static $table = 'users';
    private ?PDO $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->conn(); 
    }

    public function registrar($nome, $email, $senha) {
        $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO " . self::$table . " (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $hashedPassword
        ]);
    }

    public function login($email, $senha) {
        $sql = "SELECT * FROM " . self::$table . " WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];
            $_SESSION['user_email'] = $user['email'];

            return true; 
        }
        
        return false;
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION = []; 
        session_destroy(); 
        setcookie(session_name(), '', time() - 3600, '/');
    }
}
