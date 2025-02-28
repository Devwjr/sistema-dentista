<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAMENTO</title>
</head>
<body>
    <h1>AGENDE SUA CONSULTA</h1>
    <form action="/cadastrar" method="POST">
        <!-- Nome -->
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>









        

        <!-- E-mail -->
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Senha -->
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <!-- Data de Nascimento -->
        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="medico">Médico Responsável:</label><br>
        <select id="medico" name="medico" required>
            <option value="dr_jose">Dr. José</option>
            <option value="dra_maria">Dra. Maria</option>
            <option value="dr_pedro">Dr. Pedro</option>
        </select><br><br>

        
        <label for="tratamento">Tratamento Selecionado:</label><br>
        <select id="tratamento" name="tratamento" required>
            <option value="limpeza">Limpeza Dentária</option>
            <option value="restauracao">Restauração Dentária</option>
            <option value="clareamento">Clareamento</option>
            <option value="ortodontia">Ortodontia</option>
        </select><br><br>

    
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
