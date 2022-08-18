-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-08-2022 a las 01:26:42
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpintermedio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariospagina`
--

DROP TABLE IF EXISTS `usuariospagina`;
CREATE TABLE IF NOT EXISTS `usuariospagina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `DNI` int NOT NULL,
  `estado` varchar(10) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuariospagina`
--

INSERT INTO `usuariospagina` (`id`, `nombre`, `apellido`, `DNI`, `estado`, `mensaje`, `imagen`) VALUES
(32, 'Miel', 'Granja', 567, 'finalizado', 'Pura', 'miel.jpg'),
(28, 'Leche', 'La serenisima', 12345, 'finalizado', 'Descremada', 'leche.jpg'),
(27, 'Pan', 'Fargo', 1234, 'proceso', 'Blanco', 'pan.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
