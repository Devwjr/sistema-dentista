<?php
session_start();
if (!isset($_SESSION['admin_logado'])) {
    header('Location: login.php');
    exit();
}

require_once '../includes/Database.php';
require_once '../includes/funcoes.php';


if (isset($_GET['deletar'])) {
    $id = (int)$_GET['deletar'];
    $sql = "DELETE FROM agendamentos WHERE id = $id";
    mysqli_query($conexao, $sql);
    header('Location: agendamentos.php');
    exit();
}

$sql = "SELECT * FROM agendamentos ORDER BY data_consulta, hora_consulta";
$resultado = mysqli_query($conexao, $sql);
$agendamentos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrar Agendamentos</title>
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <h1>Agendamentos</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Paciente</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Procedimento</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($agendamentos as $agendamento): ?>
        <tr>
            <td><?= $agendamento['id'] ?></td>
            <td><?= htmlspecialchars($agendamento['nome_paciente']) ?></td>
            <td><?= formatarData($agendamento['data_consulta']) ?></td>
            <td><?= $agendamento['hora_consulta'] ?></td>
            <td><?= htmlspecialchars($agendamento['procedimento']) ?></td>
            <td>
                <a href="editar.php?id=<?= $agendamento['id'] ?>">Editar</a>
                <a href="?deletar=<?= $agendamento['id'] ?>" onclick="return confirm('Tem certeza?')">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>