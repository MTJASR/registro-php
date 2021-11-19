-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 04:12:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integral_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(50) NOT NULL,
  `cedula` int(20) NOT NULL,
  `telefono` int(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `salario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `cedula`, `telefono`, `correo`, `ciudad`, `salario`) VALUES
('alejandro', 323231, 2147483647, 'angelica@gmail.com', 'gamarra', 2323),
('Alejandro suarez', 1065915342, 2147483647, 'jose@gmail.com', 'Aguachica-cesar', 8999999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `correo`, `contrasena`) VALUES
('Alejandro suarez', 'rivera', 'jose@gmail.com', '12345'),
('DAYANA BOTELLO', 'Suarez', 'daya@gmail.com', '12345'),
('DAYANA BOTELLO ROBLES', 'Suarez botello', 'daya1@gmail.com', '123'),
('angelica', 'Maria', 'angelica@gmail.com', '123'),
('camilo', 'perez', 'camilo@gmail.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
