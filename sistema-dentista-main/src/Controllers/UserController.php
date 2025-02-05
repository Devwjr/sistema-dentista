<?php

namespace src\Controllers;

use src\Models\User;

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    // Método para registrar um novo usuário
    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);

            if (!empty($nome) && !empty($email) && !empty($senha)) {
                if ($this->userModel->registrar($nome, $email, $senha)) {
                    header("Location: /login"); // Redireciona para a página de login
                    exit;
                } else {
                    echo "Erro ao registrar usuário.";
                }
            } else {
                echo "Preencha todos os campos!";
            }
        }
    }

    // Método para fazer login
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);

            if (!empty($email) && !empty($senha)) {
                if ($this->userModel->login($email, $senha)) {
                    header("Location: /agendamentos"); // Redireciona para a página de agendamentos
                    exit;
                } else {
                    echo "E-mail ou senha inválidos!";
                }
            } else {
                echo "Preencha todos os campos!";
            }
        }
    }

    // Método para deslogar
    public function logout() {
        $this->userModel->logout();
        header("Location: /login"); // Redireciona para a página de login
        exit;
    }
}
