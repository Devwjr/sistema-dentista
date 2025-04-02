<?php
function formatarData($data) {
    return date('d/m/Y', strtotime($data));
}

function estaLogado() {
    return isset($_SESSION['admin_logado']);
}

function validarDadosAgendamento($dados) {
    // Implemente suas validações aqui
    return true;
}