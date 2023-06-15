-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2023 às 22:38
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdxboxsite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgamepass`
--

CREATE TABLE `tbgamepass` (
  `ID_jogo` int(11) NOT NULL,
  `nomeJogo` varchar(100) NOT NULL,
  `generoJogo` varchar(50) NOT NULL,
  `descricaoJogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `ID_usuarios` int(11) NOT NULL,
  `nome` varchar(124) NOT NULL,
  `email` varchar(124) NOT NULL,
  `motcont` varchar(124) NOT NULL,
  `comentario` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`ID_usuarios`, `nome`, `email`, `motcont`, `comentario`) VALUES
(6, 'Gabriel Ferreira Amorim', 'Gabrielamorim15436@gmail.com', 'Reclamações', 'por favor, adicionar mais conteúdo ao site.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbgamepass`
--
ALTER TABLE `tbgamepass`
  ADD PRIMARY KEY (`ID_jogo`);

--
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`ID_usuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbgamepass`
--
ALTER TABLE `tbgamepass`
  MODIFY `ID_jogo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `ID_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
