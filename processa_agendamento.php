<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $erros = [];

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($nome)) {
        $erros[] = "Nome é obrigatório";
    }
    
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $erros[] = "E-mail inválido";
    }
    
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($telefone)) {
        $erros[] = "Telefone é obrigatório";
    }
    
    $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_DEFAULT);
    $dentista = filter_input(INPUT_POST, 'dentista', FILTER_VALIDATE_INT);
    if (!$dentista) {
        $erros[] = "Selecione um dentista válido";
    }
    
    $procedimento = filter_input(INPUT_POST, 'procedimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if (empty($procedimento)) {
        $erros[] = "Procedimento é obrigatório";
    }
    
    $data_consulta = filter_input(INPUT_POST, 'data_consulta', FILTER_DEFAULT);
    if (empty($data_consulta)) {
        $erros[] = "Data da consulta é obrigatória";
    }
    
    $hora_consulta = filter_input(INPUT_POST, 'hora_consulta', FILTER_DEFAULT);
    if (empty($hora_consulta)) {
        $erros[] = "Horário é obrigatório";
    }
    
    $observacoes = filter_input(INPUT_POST, 'observacoes', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
    if (empty($erros)) { 
        $mensagem = "Agendamento realizado com sucesso!<br><br>";
        $mensagem .= "<strong>Nome:</strong> " . htmlspecialchars($nome) . "<br>";
        $mensagem .= "<strong>Email:</strong> " . htmlspecialchars($email) . "<br>";
        $mensagem .= "<strong>Telefone:</strong> " . htmlspecialchars($telefone) . "<br>";
        if ($data_nascimento) {
            $mensagem .= "<strong>Data Nascimento:</strong> " . date('d/m/Y', strtotime($data_nascimento)) . "<br>";
        }
        $mensagem .= "<strong>Dentista:</strong> " . htmlspecialchars(getNomeDentista($dentista)) . "<br>";
        $mensagem .= "<strong>Procedimento:</strong> " . htmlspecialchars($procedimento) . "<br>";
        $mensagem .= "<strong>Data Consulta:</strong> " . date('d/m/Y', strtotime($data_consulta)) . " às " . htmlspecialchars($hora_consulta) . "<br>";
        if ($observacoes) {
            $mensagem .= "<strong>Observações:</strong> " . htmlspecialchars($observacoes) . "<br>";
        }
  
        echo "<!DOCTYPE html>
        <html lang='pt-BR'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Agendamento Confirmado - OdontoLife</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='container my-5'>
                <div class='alert alert-success'>
                    $mensagem
                </div>
                <a href='agendar.php' class='btn btn-primary'>Novo Agendamento</a>
            </div>
        </body>
        </html>";
        exit;
    } else {

        $mensagemErro = "<div class='alert alert-danger'><ul>";
        foreach ($erros as $erro) {
            $mensagemErro .= "<li>$erro</li>";
        }
        $mensagemErro .= "</ul></div>";
        
        echo "<!DOCTYPE html>
        <html lang='pt-BR'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Erro no Agendamento - OdontoLife</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body>
            <div class='container my-5'>
                $mensagemErro
                <a href='agendar.php' class='btn btn-primary'>Voltar ao Formulário</a>
            </div>
        </body>
        </html>";
        exit;
    }
} else {

    header('Location: agendar.php');
    exit;
}
function getNomeDentista($id) {
    $dentistas = [
        1 => 'Dra. Ana Silva - Clínico Geral',
        2 => 'Dr. Carlos Mendes - Ortodontia',
        3 => 'Dra. Fernanda Lima - Endodontia',
        4 => 'Dr. Roberto Santos - Implantodontia',
        5 => 'Dra. Patrícia Oliveira - Periodontia'
    ];
    return $dentistas[$id] ?? 'Dentista não encontrado';
}
?>