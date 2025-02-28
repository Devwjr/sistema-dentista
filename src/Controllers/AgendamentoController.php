<?php
require_once 'models/Agendamento.php';

class AgendamentoController {
    
    // Exibe todos os agendamentos
    public function index() {
        $agendamentos = Agendamento::getAll();
        require 'views/agendamentos/index.php';
    }

    // Exibe o formulário de agendamento
    public function create() {
        require 'views/agendamentos/create.php';
    }

    // Salva um novo agendamento
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente_id = $_POST['cliente_id'];
            $data_hora = $_POST['data_hora'];
            $servico = $_POST['servico'];
            
            Agendamento::create($cliente_id, $data_hora, $servico);
            header('Location: /agendamentos');
            exit();
        }
    }

    // Cancela um agendamento
    public function delete($id) {
        Agendamento::delete($id);
        header('Location: /agendamentos');
        exit();
    }
}
