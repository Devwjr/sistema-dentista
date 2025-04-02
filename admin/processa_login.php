<?php
session_start();
require_once 'includes/Database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha']; 
    
    // Validação básica
    if (empty($email) || empty($senha)) {
        header('Location: login.php?erro=1');
        exit;
    }
    
    try {
        
        $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        $stmt = $pdo->prepare("SELECT id, nome, email, senha FROM admin WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);
        

        if ($admin && password_verify($senha, $admin['senha'])) {
            // Autenticação bem-sucedida
            $_SESSION['admin_logado'] = true;
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_nome'] = $admin['nome'];
            $_SESSION['admin_email'] = $admin['email'];
            header('Location: admin/dashboard.php');
            exit;
        } else {
            header('Location: login.php?erro=1');
            exit;
        }
    } catch (PDOException $e) {
        // Em caso de erro na conexão com o banco de dados
        error_log("Erro no login: " . $e->getMessage());
        header('Location: login.php?erro=1');
        exit;
    }
} else {

    header('Location: login.php');
    exit;
}
?>