<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registres-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Registre-se para marcar uma consulta</h2>
                        <form action="/register" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input type="tel" name="telefone" id="telefone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha:</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                        <p class="text-center mt-3">
                            Já tem uma conta? <a href="/login">Faça login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
