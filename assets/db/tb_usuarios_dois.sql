-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2018 às 22:58
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbphp7`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios_dois`
--

CREATE TABLE `tb_usuarios_dois` (
  `idusuario` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `dessenha` varchar(254) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios_dois`
--

INSERT INTO `tb_usuarios_dois` (`idusuario`, `deslogin`, `dessenha`, `dtcadastro`) VALUES
(1, 'Junior', '1234567890', '2018-12-16 20:38:23'),
(2, 'Lima', 'qwerty', '2018-12-16 20:58:11'),
(4, 'Junior', '1234567890', '2018-12-16 20:39:43'),
(6, 'Junior', '1234567890', '2018-12-16 20:42:31'),
(7, 'Junior', '1234567890', '2018-12-16 20:42:37'),
(8, 'Christian Lima', '1234567890', '2018-12-20 20:44:01'),
(9, 'Junior', '1234567890', '2018-12-16 20:44:08'),
(10, 'Michael', '1234567890', '2018-12-20 20:43:25'),
(11, 'Junior', '1234567890', '2018-12-16 20:44:50'),
(12, 'Bruna Lima', '1234567890', '2018-12-20 20:43:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_usuarios_dois`
--
ALTER TABLE `tb_usuarios_dois`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_usuarios_dois`
--
ALTER TABLE `tb_usuarios_dois`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
