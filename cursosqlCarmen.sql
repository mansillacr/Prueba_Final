-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 11-06-2023 a las 16:13:24
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` text NOT NULL,
  `apellido1` text NOT NULL,
  `apellido2` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido1`, `apellido2`, `email`, `login`, `pass`) VALUES
('', '', '', 'esthergarciatornero05@gmail.com', '', '45678'),
('', '', '', 'mansillacr@gmail.com', '', '12345'),
('', '', '', 'MANS@G.COM', '', '12345'),
('', '', '', 'hfaj@fe.c', '', '12345'),
('', '', '', 'hfaj@fe.u', '', '12345'),
('', '', '', 'hfaj@fe.kkm', '', '12345'),
('', '', '', 'hfaj@fe.cjjj', '', '12345'),
('', '', '', 'hfaj@fe.cjjjgfghjk', '', '555555'),
('', '', '', 'hfaj@fe.cdsfghj', '', '12345'),
('', '', '', 'hfaj@fe.cghj', '', '12345'),
('', '', '', 'hfaj@fe.cdfsf', '', '12345'),
('', '', '', 'hfaj@fe.cghjgjhkjk', '', '12345'),
('', '', '', 'hfaj@fe.cghjd', '', '12456'),
('', '', '', 'hfaj@fe.cghjmk', '', '12345'),
('', '', '', 'mansillacr@gmail.comh', '', '12345'),
('', '', '', 'mansillacr@gmail.comyyyh', '', '12345'),
('', '', '', 'mansillacr@gmail.comhh', '', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
