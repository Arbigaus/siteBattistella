-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Abr-2017 às 03:34
-- Versão do servidor: 10.1.10-MariaDB
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
-- Estrutura da tabela `arquivos`
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
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `nome`, `url`, `assunto`, `data`, `id_tipo_doc`) VALUES
(1, 'AGE - Edital de ConvocaÃ§Ã£o', '61768c4bc133bcdaf6e028fc9ef718cd.pdf', 'AprovaÃ§Ã£o da conversÃ£o voluntÃ¡ria de aÃ§Ãµes preferenciais em ordinÃ¡rias\r\nReduzir nÃºmero de Conselheiros de 05 para 03 membros ou eliminar a remuneraÃ§Ã£o dos Conselheiros.', '12/04/2017', 4),
(2, 'ATA - Documento Teste', 'b48fa0c4a8db974adce403523ee59e9c.pdf', 'Teste de Envio de documento.', '02/07/2017', 3),
(5, 'ATA - Documento 3', 'ad443c4b6b945af2644eebb66dfb594d.pdf', 'Teste de novo.', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_doc`
--

INSERT INTO `tipo_doc` (`id`, `nome`) VALUES
(1, 'Arquivos Societários'),
(2, 'Aviso aos Acionistas'),
(3, 'Atas'),
(4, 'Assembleia'),
(5, 'Balanço Social');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gerson Arbrugaus', 'gerson.arbrugaus@cotrasa.com.br', 'e10adc3949ba59abbe56e057f20f883e');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
