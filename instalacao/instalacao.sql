-- drop database  cadastro;

CREATE DATABASE cadastro;

USE cadastro;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2018 às 02:56
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `cpf`, `endereco`, `cidade`, `email`, `senha`, `id`) VALUES
('janaina', '1042506004', 'Eduardo Maerkli', 'santo angelo', 'janaina@gmail.com', '123', 1),
('joao', '401540500', 'jornada', 'antunes', 'joao@gmail.com', '23456', 2),
('Teste', '123456789', 'Getulio', 'Santo Ã¢ngelo', 'a@a.com', '123', 3),
('Teste', '123456789', 'Getulio', 'Santo Ã¢ngelo', 'a@a.com', '123', 4),
('Teste', '123456789', 'Getulio', 'Santo Ã¢ngelo', 'a@a.com', '123', 5),
('fernando', '40254090057', 'Getulio', 'girua', 'fernando@gmail', '12345', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
