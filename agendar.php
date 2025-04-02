<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Consulta - OdontoLife</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .required:after {
            content: " *";
            color: red;
        }
        body {
            padding-top: 56px;
            background-color: #f8f9fa;
        }
        .form-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .btn-submit {
            background-color: #0d6efd;
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">OdontoLife</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php#home">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contato">Contato</a></li>
                        <li class="nav-item"><a class="btn btn-light text-primary" href="agendar.php">Agendar Consulta</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="card form-card">
                    <header class="card-header bg-primary text-white">
                        <h1 class="text-center mb-0">Agendar Consulta Odontológica</h1>
                    </header>
                    <div class="card-body">
                        <form id="formAgendamento" method="POST" action="processa_agendamento.php" novalidate>
                            <section class="form-section" aria-labelledby="dadosPessoaisTitulo">
                                <h2 id="dadosPessoaisTitulo" class="mb-4 text-primary">Dados Pessoais</h2>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nome" class="form-label required">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" required
                                            placeholder="Ex: João da Silva" minlength="3">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label required">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" required
                                            placeholder="Ex: joao@email.com">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefone" class="form-label required">Telefone</label>
                                        <input type="tel" class="form-control" id="telefone" name="telefone" required
                                            placeholder="Ex: (11) 99999-9999" pattern="\([0-9]{2}\) [0-9]{4,5}-[0-9]{4}">
                                        <small class="text-muted">Formato: (DD) 99999-9999</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                                            max="<?= date('Y-m-d') ?>">
                                    </div>
                                </div>
                            </section>

                            <hr class="my-4" aria-hidden="true">

                            <section class="form-section" aria-labelledby="detalhesConsultaTitulo">
                                <h2 id="detalhesConsultaTitulo" class="mb-4 text-primary">Detalhes da Consulta</h2>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="dentista" class="form-label required">Dentista</label>
                                        <select class="form-select" id="dentista" name="dentista" required>
                                            <option value="" selected disabled>Selecione um dentista</option>
                                            <option value="1">Dra. Ana Silva - Clínico Geral</option>
                                            <option value="2">Dr. Carlos Mendes - Ortodontia</option>
                                            <option value="3">Dra. Fernanda Lima - Endodontia</option>
                                            <option value="4">Dr. Roberto Santos - Implantodontia</option>
                                            <option value="5">Dra. Patrícia Oliveira - Periodontia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="procedimento" class="form-label required">Procedimento</label>
                                        <select class="form-select" id="procedimento" name="procedimento" required>
                                            <option value="" selected disabled>Selecione um procedimento</option>
                                            <option value="Consulta de rotina">Consulta de rotina</option>
                                            <option value="Limpeza dental">Limpeza dental</option>
                                            <option value="Clareamento dental">Clareamento dental</option>
                                            <option value="Tratamento de canal">Tratamento de canal</option>
                                            <option value="Extração dentária">Extração dentária</option>
                                            <option value="Implante dentário">Implante dentário</option>
                                            <option value="Ortodontia">Ortodontia</option>
                                            <option value="Outro">Outro</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="data_consulta" class="form-label required">Data da Consulta</label>
                                        <input type="date" class="form-control" id="data_consulta" name="data_consulta"
                                            min="<?= date('Y-m-d', strtotime('+1 day')) ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hora_consulta" class="form-label required">Horário</label>
                                        <select class="form-select" id="hora_consulta" name="hora_consulta" required>
                                            <option value="" selected disabled>Selecione um horário</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="observacoes" class="form-label">Observações</label>
                                        <textarea class="form-control" id="observacoes" name="observacoes" rows="3"
                                            placeholder="Informe qualquer detalhe importante sobre sua consulta"></textarea>
                                    </div>
                                </div>
                            </section>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-submit">Confirmar Agendamento</button>
                                <a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>© 2025 OdontoLife - Todos os direitos reservados.</p>
        <p>Contato: (11) 99999-9999 | contato@odontolife.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    
            const dataNascimento = document.getElementById('data_nascimento');
            if (dataNascimento) {
                dataNascimento.max = new Date().toISOString().split('T')[0];
            }

            const dataConsulta = document.getElementById('data_consulta');
            if (dataConsulta) {
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                dataConsulta.min = tomorrow.toISOString().split('T')[0];
                
                dataConsulta.addEventListener('change', function() {
                    const selectedDate = new Date(this.value);
                    const today = new Date();
                    today.setHours(0, 0, 0, 0);
                    
                    if (selectedDate < today) {
                        alert('Não é possível agendar para datas passadas');
                        this.value = '';
                    }
                });
            }

            const telefone = document.getElementById('telefone');
            if (telefone) {
                telefone.addEventListener('input', function(e) {
                    let value = e.target.value.replace(/\D/g, '');
                    if (value.length > 11) value = value.substring(0, 11);
                    
                    if (value.length > 0) {
                        value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
                        if (value.length > 10) {
                            value = value.replace(/(\d)(\d{4})$/, '$1-$2');
                        } else {
                            value = value.replace(/(\d)(\d{3})$/, '$1-$2');
                        }
                    }
                    
                    e.target.value = value;
                });
            }

       
            const form = document.getElementById('formAgendamento');
            if (form) {
                form.addEventListener('submit', function(event) {
                    if (!this.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                        alert('Por favor, preencha todos os campos obrigatórios corretamente.');
                    }
                    this.classList.add('was-validated');
                }, false);
            }
        });
    </script>
</body>
</html>