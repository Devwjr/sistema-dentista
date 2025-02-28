<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <link rel="stylesheet" href="src/Public/css/style.css">
</head>
<body>

    <h2>Lista de Pacientes</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $patient): ?>
                    <tr>
                        <td><?= htmlspecialchars($patient['id']) ?></td>
                        <td><?= htmlspecialchars($patient['nome']) ?></td>
                        <td><?= htmlspecialchars($patient['email']) ?></td>
                        <td id="telefoneCell"><?= htmlspecialchars($patient['telefone']) ?></td>
                        <td><?= htmlspecialchars($patient['data_nascimento']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Nenhum paciente encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
            

    <script src="src/Public/js/script.js"></script>
</body>
</html>
