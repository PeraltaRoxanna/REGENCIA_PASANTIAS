-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2022 a las 16:43:00
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
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `ID_item` int(16) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `ubicacion` varchar(40) DEFAULT NULL,
  `razon` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `item` varchar(20) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`ID_item`, `nombre`, `ubicacion`, `razon`, `fecha`, `item`, `estado`) VALUES
(1, 'yo', 'dond', 'jaja', '0000-00-00', 'hola', 'si'),
(2, 'javier', 'armario-3-estante-2', 'porque ahi esta bien', '0000-00-00', 'libro', 'si'),
(3, 'pepe', 'estante-3', 'porque i', '2022-07-06', 'libro_actas', 'si'),
(4, 'sanr', 'estante4', 'porque', '2022-07-06', 'librito', 'si'),
(5, 'pablo', 'armario2', 'proque', '2022-07-06', 'papel', 'si'),
(6, 'pepe', 'estante5', 'porque', '2022-07-06', 'papelA4', 'si'),
(7, 'capalbo', 'estante3', 'porq', '2022-07-06', 'lapiz', 'si'),
(8, 'javier', 'estante3', 'proquee', '2022-07-06', 'pala', 'si'),
(9, 'nacho', 'estante3', 'rpqoeusi', '2022-07-06', 'librito', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_item`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `ID_item` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
