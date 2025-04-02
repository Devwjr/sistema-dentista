
CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE dentistas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pacientes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  data_nascimento DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE consultas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  descricao TEXT NOT NULL,
  paciente_id INT NOT NULL,
  dentista_id INT NOT NULL,
  data DATETIME NOT NULL,
  FOREIGN KEY (paciente_id) REFERENCES pacientes(id),
  FOREIGN KEY (dentista_id) REFERENCES dentistas(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE tratamentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  descricao TEXT NOT NULL,
  paciente_id INT NOT NULL,
  dentista_id INT NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE DEFAULT NULL,
  FOREIGN KEY (paciente_id) REFERENCES pacientes(id),
  FOREIGN KEY (dentista_id) REFERENCES dentistas(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE pagamentos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  paciente_id INT NOT NULL,
  valor DECIMAL(10,2) NOT NULL,
  data_pagamento DATE NOT NULL,
  descricao TEXT NOT NULL,
  FOREIGN KEY (paciente_id) REFERENCES pacientes(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserção de dados iniciais
INSERT INTO admin (nome, email, senha) VALUES 
('Admin', 'admin@mail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- senha: senha123

INSERT INTO dentistas (nome, email, senha) VALUES 
('Luis Nunes', 'luis@mail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- senha: senha123

INSERT INTO pacientes (nome, email, telefone, data_nascimento) VALUES 
('Marcos Santos', 'marcos@mail.com', '32991785179', '2015-02-02');

INSERT INTO consultas (descricao, paciente_id, dentista_id, data) VALUES 
('Limpeza dental', 1, 1, '2025-02-04 19:17:32');

INSERT INTO tratamentos (descricao, paciente_id, dentista_id, data_inicio, data_fim) VALUES 
('Preventivos Limpeza dental, Aplicação de flúor, Raspagens, Selantes', 1, 1, '2025-02-03', '2025-02-20');
