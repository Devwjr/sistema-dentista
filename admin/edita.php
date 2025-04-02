<?php
session_start();
if (!estaLogado()) {
    header('Location: login.php');
    exit();
}

require_once '../includes/conexao.php';


$id = (int)$_GET['id'];
$sql = "SELECT * FROM agendamentos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$agendamento = mysqli_fetch_assoc($resultado);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $data = mysqli_real_escape_string($conexao, $_POST['data']);
    
    $sql = "UPDATE agendamentos SET 
            nome_paciente = '$nome',
            data_consulta = '$data'
            WHERE id = $id";
    
    mysqli_query($conexao, $sql);
    header('Location: agendamentos.php');
    exit();
}
?>

<form method="POST">
    <input type="text" name="nome" value="<?= htmlspecialchars($agendamento['nome_paciente']) ?>">
    <input type="date" name="data" value="<?= $agendamento['data_consulta'] ?>">
    <!-- outros campos -->
    <button type="submit">Salvar</button>
</form>