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
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `idusuario` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `dessenha` varchar(256) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`idusuario`, `deslogin`, `dessenha`, `dtcadastro`) VALUES
(1, 'user', '12345', '2018-12-11 01:25:09'),
(2, 'user2', '123456789', '2018-12-11 01:25:34'),
(3, 'user2', '123456789', '2018-12-11 01:30:56'),
(4, 'root', '!@#$', '2018-12-11 01:30:56'),
(5, 'user2', '123456789', '2018-12-11 01:31:12'),
(6, 'root', '!@#$', '2018-12-11 01:31:13'),
(7, 'user2', '123456789', '2018-12-11 01:31:20'),
(8, 'root', '!@#$', '2018-12-11 01:31:20'),
(9, 'user2', '123456789', '2018-12-11 01:32:58'),
(10, 'root', '!@#$', '2018-12-11 01:32:58'),
(11, 'user2', '123456789', '2018-12-11 01:34:52'),
(12, 'root', '!@#$', '2018-12-11 01:34:52'),
(13, 'user2', '123456789', '2018-12-11 01:42:44'),
(14, 'root', '!@#$', '2018-12-11 01:42:44'),
(15, 'user2', '123456789', '2018-12-11 01:43:31'),
(16, 'root', '!@#$', '2018-12-11 01:43:31'),
(17, 'user2', '123456789', '2018-12-11 01:43:35'),
(18, 'root', '!@#$', '2018-12-11 01:43:35'),
(19, 'user2', '123456789', '2018-12-11 01:46:44'),
(20, 'root', '!@#$', '2018-12-11 01:46:44'),
(21, 'user2', '123456789', '2018-12-11 01:46:51'),
(22, 'root', '!@#$', '2018-12-11 01:46:52'),
(23, 'user2', '123456789', '2018-12-11 01:46:53'),
(24, 'root', '!@#$', '2018-12-11 01:46:53'),
(25, 'user2', '123456789', '2018-12-11 01:47:02'),
(26, 'root', '!@#$', '2018-12-11 01:47:02'),
(27, 'user2', '123456789', '2018-12-11 01:47:21'),
(28, 'root', '!@#$', '2018-12-11 01:47:21'),
(29, 'user2', '123456789', '2018-12-11 01:48:29'),
(30, 'root', '!@#$', '2018-12-11 01:48:29'),
(31, 'user2', '123456789', '2018-12-11 01:48:35'),
(32, 'root', '!@#$', '2018-12-11 01:48:35'),
(33, 'user2', '123456789', '2018-12-11 01:50:53'),
(34, 'root', '!@#$', '2018-12-11 01:50:53'),
(35, 'user2', '123456789', '2018-12-11 01:50:54'),
(36, 'root', '!@#$', '2018-12-11 01:50:54'),
(37, 'user2', '123456789', '2018-12-11 01:50:55'),
(38, 'root', '!@#$', '2018-12-11 01:50:55'),
(39, 'user2', '123456789', '2018-12-11 01:53:19'),
(40, 'root', '!@#$', '2018-12-11 01:53:19'),
(41, 'user2', '123456789', '2018-12-11 01:53:32'),
(42, 'root', '!@#$', '2018-12-11 01:53:32'),
(43, 'user2', '123456789', '2018-12-11 01:53:35'),
(44, 'root', '!@#$', '2018-12-11 01:53:35'),
(45, 'user2', '123456789', '2018-12-11 01:53:37'),
(46, 'root', '!@#$', '2018-12-11 01:53:37'),
(47, 'user2', '123456789', '2018-12-11 01:53:39'),
(48, 'root', '!@#$', '2018-12-11 01:53:40'),
(49, 'user2', '123456789', '2018-12-11 01:55:22'),
(50, 'root', '!@#$', '2018-12-11 01:55:22'),
(51, 'user2', '123456789', '2018-12-11 01:56:17'),
(52, 'root', '!@#$', '2018-12-11 01:56:17'),
(53, 'user2', '123456789', '2018-12-11 02:00:41'),
(54, 'root', '!@#$', '2018-12-11 02:00:41'),
(55, 'user2', '123456789', '2018-12-11 02:01:22'),
(56, 'root', '!@#$', '2018-12-11 02:01:22'),
(57, 'user2', '123456789', '2018-12-11 02:02:02'),
(58, 'root', '!@#$', '2018-12-11 02:02:02'),
(59, 'user2', '123456789', '2018-12-11 02:03:37'),
(60, 'root', '!@#$', '2018-12-11 02:03:37'),
(61, 'user2', '123456789', '2018-12-11 02:06:53'),
(62, 'root', '!@#$', '2018-12-11 02:06:53'),
(63, 'user2', '123456789', '2018-12-11 02:07:59'),
(64, 'root', '!@#$', '2018-12-11 02:07:59'),
(65, 'user2', '123456789', '2018-12-11 02:08:56'),
(66, 'root', '!@#$', '2018-12-11 02:08:56'),
(67, 'user2', '123456789', '2018-12-11 02:09:30'),
(68, 'root', '!@#$', '2018-12-11 02:09:30'),
(69, 'user2', '123456789', '2018-12-11 02:09:33'),
(70, 'root', '!@#$', '2018-12-11 02:09:33'),
(71, 'user2', '123456789', '2018-12-11 02:09:33'),
(72, 'root', '!@#$', '2018-12-11 02:09:33'),
(73, 'user2', '123456789', '2018-12-11 02:09:34'),
(74, 'root', '!@#$', '2018-12-11 02:09:34'),
(75, 'user2', '123456789', '2018-12-11 02:09:34'),
(76, 'root', '!@#$', '2018-12-11 02:09:34'),
(77, 'user2', '123456789', '2018-12-11 02:09:34'),
(78, 'root', '!@#$', '2018-12-11 02:09:34'),
(79, 'user2', '123456789', '2018-12-11 02:09:34'),
(80, 'root', '!@#$', '2018-12-11 02:09:34'),
(81, 'user2', '123456789', '2018-12-11 02:09:34'),
(82, 'root', '!@#$', '2018-12-11 02:09:34'),
(83, 'user2', '123456789', '2018-12-11 02:09:34'),
(84, 'root', '!@#$', '2018-12-11 02:09:34'),
(85, 'user2', '123456789', '2018-12-11 02:09:37'),
(86, 'root', '!@#$', '2018-12-11 02:09:37'),
(87, 'user2', '123456789', '2018-12-11 02:09:37'),
(88, 'root', '!@#$', '2018-12-11 02:09:37'),
(89, 'user2', '123456789', '2018-12-11 02:09:37'),
(90, 'root', '!@#$', '2018-12-11 02:09:37'),
(91, 'user2', '123456789', '2018-12-11 02:09:39'),
(92, 'root', '!@#$', '2018-12-11 02:09:39'),
(93, 'user2', '123456789', '2018-12-11 02:09:40'),
(94, 'root', '!@#$', '2018-12-11 02:09:40'),
(95, 'user2', '123456789', '2018-12-11 02:09:42'),
(96, 'root', '!@#$', '2018-12-11 02:09:42'),
(97, 'user2', '123456789', '2018-12-11 02:09:43'),
(98, 'root', '!@#$', '2018-12-11 02:09:43'),
(99, 'user2', '123456789', '2018-12-11 02:09:44'),
(100, 'root', '!@#$', '2018-12-11 02:09:45'),
(101, 'user2', '123456789', '2018-12-11 02:33:20'),
(102, 'root', '!@#$', '2018-12-11 02:33:20'),
(103, 'user2', '123456789', '2018-12-11 11:40:36'),
(104, 'root', '!@#$', '2018-12-11 11:40:36'),
(105, 'user2', '123456789', '2018-12-11 11:42:36'),
(106, 'root', '!@#$', '2018-12-11 11:42:36'),
(107, 'user2', '123456789', '2018-12-11 11:46:01'),
(108, 'root', '!@#$', '2018-12-11 11:46:01'),
(109, 'user2', '123456789', '2018-12-11 11:47:40'),
(110, 'root', '!@#$', '2018-12-11 11:47:40'),
(111, 'user2', '123456789', '2018-12-11 11:48:11'),
(112, 'root', '!@#$', '2018-12-11 11:48:11'),
(113, 'user2', '123456789', '2018-12-11 11:48:57'),
(114, 'root', '!@#$', '2018-12-11 11:48:57'),
(115, 'user2', '123456789', '2018-12-11 11:49:09'),
(116, 'root', '!@#$', '2018-12-11 11:49:09'),
(117, 'user2', '123456789', '2018-12-11 11:49:39'),
(118, 'root', '!@#$', '2018-12-11 11:49:39'),
(119, 'user2', '123456789', '2018-12-11 11:50:46'),
(120, 'root', '!@#$', '2018-12-11 11:50:46'),
(121, 'user2', '123456789', '2018-12-11 11:52:05'),
(122, 'root', '!@#$', '2018-12-11 11:52:05'),
(123, 'user2', '123456789', '2018-12-11 11:54:13'),
(124, 'root', '!@#$', '2018-12-11 11:54:13'),
(125, 'user2', '123456789', '2018-12-11 12:05:51'),
(126, 'root', '!@#$', '2018-12-11 12:05:51'),
(127, 'user2', '123456789', '2018-12-11 12:06:56'),
(128, 'root', '!@#$', '2018-12-11 12:06:56'),
(129, 'user2', '123456789', '2018-12-11 12:16:31'),
(130, 'root', '!@#$', '2018-12-11 12:16:31'),
(131, 'user2', '123456789', '2018-12-11 12:17:43'),
(132, 'root', '!@#$', '2018-12-11 12:17:43'),
(133, 'user2', '123456789', '2018-12-11 12:18:50'),
(134, 'root', '!@#$', '2018-12-11 12:18:50'),
(135, 'user2', '123456789', '2018-12-11 12:19:50'),
(136, 'root', '!@#$', '2018-12-11 12:19:50'),
(137, 'user2', '123456789', '2018-12-11 12:20:50'),
(138, 'root', '!@#$', '2018-12-11 12:20:50'),
(139, 'user2', '123456789', '2018-12-11 12:21:16'),
(140, 'root', '!@#$', '2018-12-11 12:21:16'),
(141, 'user2', '123456789', '2018-12-11 12:21:22'),
(142, 'root', '!@#$', '2018-12-11 12:21:22'),
(143, 'user2', '123456789', '2018-12-11 12:21:27'),
(144, 'root', '!@#$', '2018-12-11 12:21:27'),
(145, 'user2', '123456789', '2018-12-11 12:21:42'),
(146, 'root', '!@#$', '2018-12-11 12:21:42'),
(147, 'user2', '123456789', '2018-12-11 12:22:29'),
(148, 'root', '!@#$', '2018-12-11 12:22:29'),
(149, 'user2', '123456789', '2018-12-11 12:23:06'),
(150, 'root', '!@#$', '2018-12-11 12:23:06'),
(151, 'user2', '123456789', '2018-12-11 12:26:13'),
(152, 'root', '!@#$', '2018-12-11 12:26:13'),
(153, 'user2', '123456789', '2018-12-11 12:27:11'),
(154, 'root', '!@#$', '2018-12-11 12:27:11'),
(155, 'user2', '123456789', '2018-12-11 12:33:07'),
(156, 'root', '!@#$', '2018-12-11 12:33:07'),
(157, 'user2', '123456789', '2018-12-11 12:34:21'),
(158, 'root', '!@#$', '2018-12-11 12:34:21'),
(159, 'user2', '123456789', '2018-12-11 12:34:50'),
(160, 'root', '!@#$', '2018-12-11 12:34:50'),
(161, 'user2', '123456789', '2018-12-11 12:34:54'),
(162, 'root', '!@#$', '2018-12-11 12:34:54'),
(163, 'user2', '123456789', '2018-12-11 12:34:57'),
(164, 'root', '!@#$', '2018-12-11 12:34:57'),
(165, 'user2', '123456789', '2018-12-11 12:35:18'),
(166, 'root', '!@#$', '2018-12-11 12:35:18'),
(167, 'user2', '123456789', '2018-12-12 23:26:17'),
(168, 'root', '!@#$', '2018-12-12 23:26:17'),
(169, 'user2', '123456789', '2018-12-14 12:23:34'),
(170, 'root', '!@#$', '2018-12-14 12:23:34'),
(171, 'user2', '123456789', '2018-12-14 12:23:54'),
(172, 'root', '!@#$', '2018-12-14 12:23:54'),
(173, 'Junior', '1234567890', '2018-12-16 20:36:44'),
(174, 'user2', '123456789', '2018-12-20 00:34:01'),
(175, 'root', '!@#$', '2018-12-20 00:34:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;