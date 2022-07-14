-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2022 às 03:30
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_comentarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `data_msg` datetime NOT NULL,
  `nome` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `data_msg`, `nome`, `msg`) VALUES
(1, '2022-06-05 02:57:03', 'sdfsfsd', '        sesefsefesrfesfwfseffsefegewes'),
(2, '2022-06-05 02:57:15', 'QWEWsfdsf', 'rfwefwefesfwwef'),
(3, '2022-06-05 02:57:48', 'QWEWsfdsf', 'rfwefwefesfwwef'),
(4, '2022-06-05 02:58:38', 'Harley', 'Saporra funcionou porra!!!!!!!'),
(5, '2022-06-05 02:59:46', 'Harley', 'Saporra funcionou porra!!!!!!!'),
(6, '2022-06-05 03:00:05', 'Harley', 'Saporra funcionou porra!!!!!!!'),
(7, '2022-06-05 03:00:14', '2342342', '        asdasdasda'),
(8, '2022-06-05 03:00:46', '2342342', '        asdasdasda'),
(9, '2022-06-05 03:04:41', '2342342', '        asdasdasda'),
(10, '2022-06-05 03:10:03', '', '        asasa'),
(11, '2022-06-05 03:10:23', '', '        asasa'),
(12, '2022-06-05 03:10:26', 'adsd', '        asdasd'),
(13, '2022-06-05 03:10:31', '', '        asdasd'),
(14, '2022-06-05 03:12:11', '', '        asdasd'),
(15, '2022-06-05 03:12:22', '', 'Hellow        '),
(16, '2022-06-05 03:12:49', '', 'Hellow        '),
(17, '2022-06-05 03:13:10', '', 'TestandoOOOOOO        '),
(18, '2022-06-05 03:13:36', '', 'TestandoOOOOOO        '),
(19, '2022-06-05 03:13:38', '', '        adsadasd'),
(20, '2022-06-05 03:13:46', '', '        Galoooooooooooo'),
(21, '2022-06-05 03:14:40', '', '        Galoooooooooooo'),
(22, '2022-06-05 03:14:51', '', '        Galoooooooooooo'),
(23, '2022-06-05 03:14:56', '', '      asasdsa  '),
(24, '2022-06-05 03:15:18', '', '      asasdsa  '),
(25, '2022-06-05 03:16:00', '', '      asasdsa  '),
(26, '2022-06-05 03:16:15', '', '      asasdsa  '),
(27, '2022-06-05 03:16:28', '', '      asasdsa  '),
(28, '2022-06-05 03:18:11', '', '      asasdsa  '),
(29, '2022-06-05 03:18:16', '', '      asasdsa  '),
(30, '2022-06-05 03:18:43', '', '      asasdsa  '),
(31, '2022-06-05 03:18:57', '', '      asasdsa  ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
