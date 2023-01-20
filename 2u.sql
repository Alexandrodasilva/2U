-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jan-2023 às 15:52
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `2u`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(400) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `complemento` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `cep`, `endereco`, `bairro`, `estado`, `municipio`, `complemento`) VALUES
(1, 'alexandro', '49580000', '23223', 'rosa else', 'SE', 'sao cristovao', 'ape'),
(2, 'Flavia ', '49100000', 'rua major tele', 'ewew', 'ewew', 'wewe', 'wewew'),
(3, 'Flavia ', '49100000', 'rua major tele', 'ewew', 'ewew', 'wewe', 'wewew'),
(4, 'ewewewe', '495800000', 'centro', 'centro', 'centro', 'centro', 'centro'),
(5, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(6, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(7, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(8, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(9, '', '', '', '', '', '', ''),
(10, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(11, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(12, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc'),
(13, 'qwdqw', '2123232', 'ccascasc', 'ascascas', 'ascasc', 'sacas', 'ascasc');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
