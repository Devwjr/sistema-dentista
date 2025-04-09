🦷 sistema odontoligico
PHP
MySQL
GitHub Last Commit

📌 Sistema de gerenciamento odontológico desenvolvido em PHP para clínicas e consultórios, com agendamento, prontuários eletrônicos e controle financeiro.

📋 Funcionalidades
✔ Agendamento de Consultas – Marcação, cancelamento e confirmação.
✔ Prontuário Eletrônico – Histórico do paciente, anotações e tratamentos.
✔ Gestão de Usuários – Dentistas  e pacientes

🛠️ Tecnologias Utilizadas
Tecnologia
PHP	Backend do sistema.
MySQL	Banco de dados.
Bootstrap	Frontend responsivo.
JavaScript	 interações.
⚙️ Pré-requisitos e Instalação
Servidor Web (XAMPP, WAMP ou LAMP).

PHP 8.0+ e MySQL 5.7+.

🚀 Passo a Passo
bash
Copy
# Clone o repositório  
git clone https://github.com/seu-usuario/dentalcare-system.git  

# Importe o banco de dados (arquivo .sql incluso)  
mysql -u root -p dentalcare < database/dump.sql  

# Configure as credenciais no arquivo  
nano config/database.php  
📸 Screenshots
Página de Login	Agenda de Consultas
Login	Agenda
🏗️ Estrutura do Projeto
Copy
📦dentalcare-system/  
├── 📂assets/          # CSS, JS e imagens  
├── 📂config/          # Configurações do banco  
├── 📂database/        # SQL e migrações  
├── 📂includes/        # Funções e templates  
├── 📂pages/           # Páginas do sistema  
└── 📜index.php        # Ponto de entrada  
🤝 Como Contribuir
Faça um fork do projeto.

Crie uma branch: git checkout -b minha-feature.

Envie um Pull Request explicando as alterações.

📜 Licença
Este projeto está sob a licença MIT. Consulte o arquivo LICENSE para mais detalhes.
