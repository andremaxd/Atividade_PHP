-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2020 às 07:49
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controle_atividades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id` int(11) NOT NULL,
  `tipo_atv` varchar(255) NOT NULL,
  `titulo` tinytext NOT NULL,
  `descricao` text NOT NULL,
  `concluido` char(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `conc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `tipo_atv`, `titulo`, `descricao`, `concluido`, `created`, `modified`, `conc`) VALUES
(65, 'Desenvolvimento', 'TÃ­tulo de desenvolvimento', 'DescriÃ§Ã£o de um desenvolvimento sem concluir!', '', '2020-06-17 02:04:24', '2020-06-17 02:04:24', 0),
(66, 'Atendimento', 'TÃ­tulo de Atendimento', 'DescriÃ§Ã£o de Atendimento sem concluir!', '', '2020-06-17 02:05:19', '2020-06-17 02:05:19', 0),
(67, 'ManutenÃ§Ã£o', 'TÃ­tulo de ManutenÃ§Ã£o', 'DescriÃ§Ã£o da ManutenÃ§Ã£o sem concluir!', '', '2020-06-17 02:06:04', '2020-06-17 02:06:04', 0),
(68, 'ManutenÃ§Ã£o Urgente', 'TÃ­tulo ManutenÃ§Ã£o Urgente', 'ManutenÃ§Ã£o Urgente com menos de 50 char!', '', '2020-06-17 02:07:47', '2020-06-17 02:07:47', 0),
(69, 'Desenvolvimento', 'TÃ­tulo Desenvolvimento', 'Desenvolvimento concluÃ­do!', '', '2020-06-17 02:09:17', '2020-06-17 02:09:17', 1),
(70, 'Atendimento', 'TÃ­tulo Atendimento', 'DescriÃ§Ã£o do Atendimento com mais de 50 Caracteres para poder salvar como concluÃ­da!', '', '2020-06-17 02:10:32', '2020-06-17 02:10:32', 1),
(71, 'ManutenÃ§Ã£o', 'Titulo ManutenÃ§Ã£o', 'DescriÃ§Ã£o da ManutenÃ§Ã£o concluÃ­da!', '', '2020-06-17 02:11:17', '2020-06-17 02:11:17', 1),
(72, 'ManutenÃ§Ã£o Urgente', 'TÃ­tulo ManutenÃ§Ã£o Urgente', 'DescriÃ§Ã£o da ManutenÃ§Ã£o Urgente com mais de 50 Caracteres para poder salvar como concluÃ­da!', '', '2020-06-17 02:11:52', '2020-06-17 02:11:52', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT 0,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Andre Max', 'andre@teste.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2020-06-14 00:00:00', '2020-06-14 00:00:00'),
(2, 'Andre Max', 'andre@teste.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2020-06-14 00:00:00', '2020-06-14 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
