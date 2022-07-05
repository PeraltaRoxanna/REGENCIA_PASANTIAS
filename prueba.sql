-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2022 a las 16:58:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id_prueba` int(16) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `edad` int(16) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_prueba`, `nombre`, `apellido`, `edad`, `fecha`) VALUES
(1, 'lu', 'dfs', 45, '2022-05-31 00:00:00'),
(2, 'Roberto', 'Carlos', 2, '2022-06-06 00:00:00'),
(3, 'Claudio', '', 0, '0000-00-00 00:00:00'),
(4, 'Juan', 'Hermenegildo', 23, '2022-06-03 00:00:00'),
(6, 'how', 'estas', 45, '2022-06-01 00:00:00'),
(7, 'chau', '[value-3]', 0, '0000-00-00 00:00:00'),
(9, 'jkjkjk', 'LaFila(funciona)', 6, '2022-06-09 00:00:00'),
(11, 'pepe', 'alvarez', 34, '2022-05-31 00:00:00'),
(12, 'juanca', 'palomas', 14, '2022-07-31 00:00:00'),
(13, 'sergio', 'reyes', 74, '2022-03-31 00:00:00'),
(14, 'romano', 'cristobal', 24, '2022-05-31 00:00:00'),
(15, 'ruman', 'perez', 64, '0000-00-00 00:00:00'),
(16, 'alma', 'marla', 14, '2022-01-31 00:00:00'),
(17, 'susana', 'horia', 14, '2022-10-31 00:00:00'),
(18, 'roberto', 'carlos', 14, '0000-00-00 00:00:00'),
(19, 'son', 'goku', 24, '2022-12-31 00:00:00'),
(20, 'sandro', 'magno', 84, '0000-00-00 00:00:00'),
(21, 'quicke', 'rodriguez', 44, '2022-05-31 00:00:00'),
(22, 'alejandro', 'cisneros', 19, '2022-05-31 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id_prueba`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
