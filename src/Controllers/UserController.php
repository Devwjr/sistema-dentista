<?php

namespace src\Controllers;

use src\Models\User;

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    private function view($viewName, $data = []) {
        extract($data);
        $viewPath = __DIR__ . "/../Views/{$viewName}.php";

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            die("Erro: View '{$viewName}.php' não encontrada em {$viewPath}");
        }
    }

    public function registerPage() {
        $this->view('registro'); 
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);

            if (!empty($nome) && !empty($email) && !empty($senha)) {
                if ($this->userModel->registrar($nome, $email, $senha)) {
                    header("Location: /login");
                    exit;
                } else {
                    $this->view('registro', ['erro' => 'Erro ao registrar usuário.']);
                }
            } else {
                $this->view('registro', ['erro' => 'Preencha todos os campos!']);
            }
        } else {
            $this->view('registro');
        }
    }
}
