-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Jul-2021 às 14:09
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `developer-test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `sku` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `attribute` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `books`
--

INSERT INTO `books` (`sku`, `name`, `price`, `attribute`) VALUES
('GGWP0007', 'War and Peace', '20.00', '2KG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dvds`
--

DROP TABLE IF EXISTS `dvds`;
CREATE TABLE IF NOT EXISTS `dvds` (
  `sku` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `attribute` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dvds`
--

INSERT INTO `dvds` (`sku`, `name`, `price`, `attribute`) VALUES
('JVC200123', 'Acme Disc', '1.00', '700 MB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `furniture`
--

DROP TABLE IF EXISTS `furniture`;
CREATE TABLE IF NOT EXISTS `furniture` (
  `sku` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `attribute` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `furniture`
--

INSERT INTO `furniture` (`sku`, `name`, `price`, `attribute`) VALUES
('TR120555', 'Chair', '20.00', '2KG');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
