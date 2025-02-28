<?php

require_once __DIR__ . '/vendor/autoload.php';

$url = isset($_GET['url']) ? $_GET['url'] : 'home';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OdontoLife - Clínica Odontológica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">OdontoLife</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item"><a class="btn btn-light text-primary" href="#agendar">Agendar Consulta</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home" class="d-flex align-items-center justify-content-center text-center text-white bg-dark" style="height: 100vh; background: url('https://source.unsplash.com/1600x900/?dentist,clinic') no-repeat center/cover;">
        <div class="bg-dark bg-opacity-50 p-5 rounded">
            <h1 class="display-4 fw-bold">Seu Sorriso é Nossa Prioridade</h1>
            <p class="lead">Cuidamos do seu sorriso com tecnologia e atendimento humanizado</p>
            <a href="views/registro.php" class="btn btn-light btn-lg">Agende sua Consulta</a>

        </div>
    </header>
    <section id="servicos" class="container my-5">
        <h2 class="text-center mb-4">Nossos Serviços</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://imgs.search.brave.com/WRVge0JQzJ11qPIltAgmdUfNkC_ENj27nn7bWj4T-GQ/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pYW5h/cmFwaW5oby5vZG8u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MjIvMTIvcHJvZmls/YXhpYS1kZW50YWwu/anBn" class="card-img-top" alt="Limpeza Dentária">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Limpeza Dentária</h5>
                        <p class="card-text">Remova o tártaro e previna problemas bucais.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://imgs.search.brave.com/EchjhwObiofKMyT-rzJ3NqGMRln_NiyPNiVErDeXcJs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pYW5h/cmFwaW5oby5vZG8u/YnIvd3AtY29udGVu/dC91cGxvYWRzLzIw/MjMvMTIvdHVkby1z/b2JyZS1pbXBsYW50/ZS1kZW50YXJpby5q/cGc" class="card-img-top" alt="Implantes Dentários">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Implantes Dentários</h5>
                        <p class="card-text">Recupere sua confiança com dentes naturais.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://imgs.search.brave.com/dVbYR_C1FWrUwBU18cP7XTb89Gp-tyKmdr5UOgvKEv0/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/ZHZpcmFkaW9sb2dp/YS5jb20uYnIvd3At/Y29udGVudC91cGxv/YWRzLzIwMjIvMDEv/cmV0cmF0by1kby1q/b3ZlbS1tb2RlbG8t/cmluZG8tZWxlZ2Fu/dGUtZW0tcm91cGFz/LWRlLXZlcmFvLWNh/c3VhbC1jaW56YS1j/b20tY2hhcGV1LW1h/cnJvbS1jb20tbWFx/dWlhZ2VtLW5hdHVy/YWwuanBn" class="card-img-top" alt="Clareamento Dental">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Clareamento Dental</h5>
                        <p class="card-text">Dentes mais brancos com um tratamento seguro.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sobre" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Sobre a OdontoLife</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://imgs.search.brave.com/G98eH0rEmgmXO6f7M-H6t-0rPYadryQcej-_cYYLnVY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9sYXNl/cnNtaWxlLmNvbS5t/eC93cC1jb250ZW50/L3VwbG9hZHMvMjAx/OS8wOC9pbWctMDgu/anBn" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <p class="lead">Somos uma clínica odontológica dedicada ao bem-estar e saúde bucal dos nossos pacientes. Contamos com uma equipe altamente qualificada e equipamentos de última geração para oferecer o melhor tratamento para o seu sorriso.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contato" class="container my-5">
        <h2 class="text-center mb-4">Entre em Contato</h2>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Tem dúvidas? Entre em contato conosco!</p>
                <p><strong>Telefone:</strong> (11) 99999-9999</p>
                <p><strong>Email:</strong> contato@odontolife.com</p>
                <p><strong>Endereço:</strong> Av. Saúde Bucal, 123 - São Paulo, SP</p>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>© 2025 OdontoLife - Todos os direitos reservados.</p>
        <p>Contato: (11) 99999-9999 | contato@odontolife.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
