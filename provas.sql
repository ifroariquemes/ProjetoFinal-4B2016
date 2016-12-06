-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2016 às 19:25
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `provas`
--

CREATE TABLE `provas` (
  `id_prova` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `tempo_resposta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id_questao` int(11) NOT NULL,
  `id_prova` int(11) NOT NULL,
  `questao` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id_respostas` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_questao` int(11) NOT NULL,
  `resposta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `provas`
--
ALTER TABLE `provas`
  ADD PRIMARY KEY (`id_prova`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_questao`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id_respostas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provas`
--
ALTER TABLE `provas`
  MODIFY `id_prova` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_respostas` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
