<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use src\Controllers\HomeController;
use src\Controllers\UserController;
use src\Controllers\AgendamentoController;
use src\Controllers\PacienteController;

$url = isset($_GET['url']) ? trim($_GET['url'], '/') : 'home';

switch ($url) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'registro':
        $controller = new UserController();
        $controller->registerPage();
        break;

    case 'registrar':
        $controller = new UserController();
        $controller->registrar();
        header('Location: home');
        exit;

    case 'login':
        $controller = new UserController();
        $controller->loginPage();
        break;

    case 'agendamento':
        $controller = new AgendamentoController();
        $controller->index();
        break;

    case 'pacientes':
        $controller = new PacienteController();
        $controller->index();
        break;

    default:
        http_response_code(404);
        echo "Página não encontrada!";
        break;
}
