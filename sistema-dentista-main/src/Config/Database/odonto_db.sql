-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/02/2025 às 23:18
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";    
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `odonto_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Admin', 'admin@mail.com', 'senha123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int NOT NULL,
  `descricao` text NOT NULL,
  `paciente_id` int NOT NULL,
  `dentista_id` int NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `consultas`
--

INSERT INTO `consultas` (`id`, `descricao`, `paciente_id`, `dentista_id`, `data`) VALUES
(1, 'Limpeza dental', 1, 1, '2025-02-04 19:17:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dentistas`
--

CREATE TABLE `dentistas` (
  `id` int NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `dentistas`
--

INSERT INTO `dentistas` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Luis Nunes', 'luis@mail.com', 'senha123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `email`, `telefone`, `data_nascimento`) VALUES
(1, 'Marcos Santos', 'marcos@mail.com', '32991785179', '2015-02-02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int NOT NULL,
  `paciente_id` int NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_pagamento` date NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `paciente_id`, `valor`, `data_pagamento`, `descricao`) VALUES
(1, 1, 120.00, '2025-02-25', 'Conclusão do Tratamento. Pagamento deve ser feita até o dia 30/02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `id` int NOT NULL,
  `descricao` text NOT NULL,
  `paciente_id` int NOT NULL,
  `dentista_id` int NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `tratamentos`
--

INSERT INTO `tratamentos` (`id`, `descricao`, `paciente_id`, `dentista_id`, `data_inicio`, `data_fim`) VALUES
(1, 'Preventivos Limpeza dental, Aplicação de flúor, Raspagens, Selantes', 1, 1, '2025-02-03', '2025-02-20'),
(2, 'Preventivos Limpeza dental, Aplicação de flúor, Raspagens, Selantes', 1, 1, '2025-02-03', '2025-02-20');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `dentista_id` (`dentista_id`);

--
-- Índices de tabela `dentistas`
--
ALTER TABLE `dentistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Índices de tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `dentista_id` (`dentista_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dentistas`
--
ALTER TABLE `dentistas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`dentista_id`) REFERENCES `dentistas` (`id`);

--
-- Restrições para tabelas `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Restrições para tabelas `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD CONSTRAINT `tratamentos_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `tratamentos_ibfk_2` FOREIGN KEY (`dentista_id`) REFERENCES `dentistas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
