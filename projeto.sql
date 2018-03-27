-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Mar-2018 às 06:26
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `participantes`
--

CREATE TABLE `participantes` (
  `projeto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `permissao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

CREATE TABLE `projetos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `criador` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `titulo`, `descricao`, `usuario_id`, `criador`) VALUES
(1, 'projeto', 'descrição', 5, 'roberto'),
(2, 'Teste', 'Teste', 7, NULL),
(3, 'ftrfgdgfd', '', 10, NULL),
(4, 'fhdgdfggdf', '', 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `acesso` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `profissao`, `senha`, `acesso`) VALUES
(7, 'Gustavo', 'Girardon', 'ggirardon@gmail.com', 'Estudante', 'df9a25f467c8237d0a78c211a72f598fafb2d88b833c680560af4d1e90b24bdc52d8d90eb33d34aac2eb597d2cae4f706c9aa8492fa4c8d4be701ee6af5426e3riGn5T0jpR7gPkOnbBLStKyEN61Qp8I7rW8JaIDI/jY=', 0),
(8, 'Gustavo', 'Girardon', 'ggirardon@gmail.com', 'xixi', '2c65ee1d78156ad88434a85c203b963befba7d683ffafa988a6ccf53db4850ae1f0aa6d504f5580ae04034a7e0549ca0f5134be130c654236a89b4d328717106U9wHoESJBni65xn4UTuwmTk1Cb60iW5qM4E+sJNK1c0=', 0),
(9, 'teste', 'teste', 'teste@msn.com', 'oi', '06c322d901074b456fc88cf438fe330ee8e3a405ba1240b95e9b3396df26237b56851f2db77da2ccdb561394f376ede9bb961390e2b2f66b8e98846a6b418c2cjahj0+FvdHWCaEFeJZHRTaf88sMPmFgNOI1wTHlARQA=', 0),
(10, '', '', '', '', 'fae219b53a7e16144972bfde27b9589e8e4c2e7ed5d71e3891c51fcd6d797981794e908235927750e6492173251dd6ed354f999aae3836816e4379d86ff2fa0aTdoQz73Ja2tinSDI38MRe4unohoThLZNUF1xeh4PRHs=', 0),
(11, '', '', '', '', '75a4809c57e16638093f031ef6962ed02e82878e23a019ab8468f11fb71d794a426abc2a6d4c0a17b8d39e330aff00184ca6a21261e0efdcf0d014f14c6c150d+rADmpuiG2+yx4SimE/EYQHZxTs47wQJt2lL+PYhRh4=', 0),
(12, '', '', '', '', '2dae7fb9781a9268b1207d5974768628a09a35d792e817877990458a1ad91469b6e77bac42f048d441151f69423c9d311a5b086a0c759a505fae0b4247a9ef2efrpBi1JKWa5s08n1I41aSaZ6DVSU+c6+gGhwGCfGHUM=', 0),
(13, '', '', '', '', 'b01ca6685020193f26396345b922492a2cbbe6dae064d60489e95199441004f7fe3d0b1bf9ab8d83e6ce2df1a9e03678082dd071de5eb4197acf1580db656a453A2GRWQZU3rFyUaFtgbuoIT4VMnQAI84G9B7YW55+40=', 0),
(14, '', '', '', '', '473180fce65a0a2801ad183b562d14d1cedb4c9f1292a41df4854ff98b484a3c5603c6469521d773d98ddaffd10f6f88f3248e2c6b0fc07ec5dfea8d70500a53r8eqP6jy8uPw9NqQwSUPYNuhO2IkyPi6RddPcp5ZKH4=', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projetos`
--
ALTER TABLE `projetos`
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
-- AUTO_INCREMENT for table `projetos`
--
ALTER TABLE `projetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
