<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrativo - OdontoLife</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card login-card">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center mb-0">Área Administrativa</h4>
            </div>
            <div class="card-body">
                <div class="logo">
                    <h3 class="text-primary">OdontoLife</h3>
                </div>
                
                <?php if (isset($_GET['erro'])): ?>
                    <div class="alert alert-danger">Credenciais inválidas. Por favor, tente novamente.</div>
                <?php endif; ?>
                
                <?php if (isset($_GET['logout'])): ?>
                    <div class="alert alert-success">Você foi desconectado com sucesso.</div>
                <?php endif; ?>
                
                <form action="processa_login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required
                               placeholder="Digite seu e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required
                               placeholder="Digite sua senha">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>