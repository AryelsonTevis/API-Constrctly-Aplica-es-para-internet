-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2025 às 21:02
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `constructly`
--
CREATE DATABASE IF NOT EXISTS `constructly` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `constructly`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `casas`
--

CREATE TABLE `casas` (
  `casa_id` int(50) NOT NULL,
  `fk_proprietario` int(150) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `metros` int(100) NOT NULL,
  `quantidade_comodos` int(100) NOT NULL,
  `valor_estimado` float NOT NULL,
  `data_contrucao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `casas`
--

INSERT INTO `casas` (`casa_id`, `fk_proprietario`, `bairro`, `metros`, `quantidade_comodos`, `valor_estimado`, `data_contrucao`) VALUES
(1, 1, 'R. José de Alencar N°1391 ', 300, 4, 10000, '2025-09-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comodos`
--

CREATE TABLE `comodos` (
  `id_comodo` int(150) NOT NULL,
  `fk_casa` int(50) NOT NULL,
  `comodo` varchar(100) NOT NULL,
  `area` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comodos`
--

INSERT INTO `comodos` (`id_comodo`, `fk_casa`, `comodo`, `area`) VALUES
(1, 1, 'Sala', 20),
(2, 1, 'Quarto', 50),
(3, 1, 'Banheiro', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `proprietarios`
--

CREATE TABLE `proprietarios` (
  `proprietario_id` int(150) NOT NULL,
  `proprietario` varchar(100) NOT NULL,
  `fk_usuarios` int(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `numero_telefone` int(12) NOT NULL,
  `CPF_CNPJ` varchar(14) NOT NULL,
  `endereço_cobrança` varchar(150) NOT NULL,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `proprietarios`
--

INSERT INTO `proprietarios` (`proprietario_id`, `proprietario`, `fk_usuarios`, `email`, `numero_telefone`, `CPF_CNPJ`, `endereço_cobrança`, `data_cadastro`) VALUES
(1, 'Pedro Paulo', 1, 'PP_do_grau@gmail.com', 0, '99999999999', 'Av. Silvio Vieira da Siĺva N°293 ', '2025-09-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `task`
--

CREATE TABLE `task` (
  `id_task` int(11) NOT NULL,
  `fk_comodos` int(150) NOT NULL,
  `progresso` varchar(100) NOT NULL,
  `data_criacao` date NOT NULL DEFAULT current_timestamp(),
  `data_inicio` date NOT NULL DEFAULT current_timestamp(),
  `data_conclusao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `task`
--

INSERT INTO `task` (`id_task`, `fk_comodos`, `progresso`, `data_criacao`, `data_inicio`, `data_conclusao`) VALUES
(1, 1, '10%', '2025-09-25', '2025-09-25', '2025-09-25'),
(2, 2, '0%', '2025-09-25', '2025-09-25', '2025-09-25'),
(3, 3, '0%', '2025-09-25', '2025-09-25', '2025-09-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero_telefone` varchar(12) NOT NULL,
  `CPF_CNPJ` varchar(14) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereço_cobrança` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nome`, `email`, `numero_telefone`, `CPF_CNPJ`, `senha`, `endereço_cobrança`, `data_cadastro`) VALUES
(1, 'João Pedro', 'test@test.com', '(99)9999999', '99999999999', '$2y$10$0Qx0v3wZ6VhJ4xNFcbVkQeWXVpV7r5sUtbF1aCYCV.Nq6O8Dabm82', 'R. Mario Azevedo 139 ', '2025-09-25');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`casa_id`),
  ADD KEY `fk_casas_proprietario` (`fk_proprietario`);

--
-- Índices de tabela `comodos`
--
ALTER TABLE `comodos`
  ADD PRIMARY KEY (`id_comodo`),
  ADD KEY `fk_casas_comodos` (`fk_casa`);

--
-- Índices de tabela `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD PRIMARY KEY (`proprietario_id`),
  ADD KEY `fk_usuarios_proprietarios` (`fk_usuarios`);

--
-- Índices de tabela `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `fk_tasks_comodos` (`fk_comodos`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `casas`
--
ALTER TABLE `casas`
  MODIFY `casa_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `comodos`
--
ALTER TABLE `comodos`
  MODIFY `id_comodo` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `proprietarios`
--
ALTER TABLE `proprietarios`
  MODIFY `proprietario_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `task`
--
ALTER TABLE `task`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `fk_casas_proprietario` FOREIGN KEY (`fk_proprietario`) REFERENCES `proprietarios` (`proprietario_id`);

--
-- Restrições para tabelas `comodos`
--
ALTER TABLE `comodos`
  ADD CONSTRAINT `fk_casas_comodos` FOREIGN KEY (`fk_casa`) REFERENCES `casas` (`casa_id`);

--
-- Restrições para tabelas `proprietarios`
--
ALTER TABLE `proprietarios`
  ADD CONSTRAINT `fk_usuarios_proprietarios` FOREIGN KEY (`fk_usuarios`) REFERENCES `usuarios` (`usuario_id`);

--
-- Restrições para tabelas `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `fk_tasks_comodos` FOREIGN KEY (`fk_comodos`) REFERENCES `comodos` (`id_comodo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
