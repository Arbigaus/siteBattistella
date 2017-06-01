-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 08:01 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `battistella_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `arquivos`
--

CREATE TABLE `arquivos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `url` varchar(36) NOT NULL,
  `assunto` text NOT NULL,
  `data` varchar(10) NOT NULL,
  `id_tipo_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `url`, `assunto`, `data`, `id_tipo_doc`) VALUES
(1, 'Ata 1', '246ab35659c465958b41481b36b910ca.pdf', 'tweste', '04/04/2017', 1),
(2, 'ata teste', 'aa49e05d6e72ea2221c7631ed8208d7d.pdf', 'teste', '03/04/2017', 2),
(3, 'teste', '25b7a3af678c9523c2dd98a1acd2bd1e.pdf', 'testes', '17/04/2017', 1),
(4, 'Hello World', '8eeb7b5df1de0dba584d9146245e01be.pdf', 'Teste de junÃ§Ã£o', '17/08/2017', 1),
(5, 'Teste junÃ§Ã£o 2', 'bd8d1c6eb2d35fa02a68dd1811b44c51.pdf', 'Teste de junÃ§Ã£o again.', '18/04/2017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tipo_doc`
--

INSERT INTO `tipo_doc` (`id`, `nome`) VALUES
(1, 'Ata'),
(2, 'Ata 2'),
(3, 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gerson Arbigaus', 'gerson.arbrugaus@cotrasa.com.br', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Elisangela Costa', 'elisangela.costa@cotrasa.com.br', 'b36b15058159d191f1671d17b2893756'),
(3, 'Melissa Telma', 'melissa.telma@cotrasa.com.br', 'b36b15058159d191f1671d17b2893756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
