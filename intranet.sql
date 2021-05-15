-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2021 a las 19:45:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--
CREATE DATABASE IF NOT EXISTS `intranet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `intranet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `codigo` int(11) NOT NULL,
  `codigo_trabajador` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia_resuelta`
--

CREATE TABLE `incidencia_resuelta` (
  `codigo_incidencia` int(11) NOT NULL,
  `codigo_tecnico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `codigo` int(11) NOT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `numero_incidencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `codigo` int(11) NOT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `jefe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `codigo` int(11) NOT NULL,
  `codigo_trabajador` int(11) DEFAULT NULL,
  `codigo_jefe` int(11) DEFAULT NULL,
  `tarea` text DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `fecha_max` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_trabajador` (`codigo_trabajador`);

--
-- Indices de la tabla `incidencia_resuelta`
--
ALTER TABLE `incidencia_resuelta`
  ADD PRIMARY KEY (`codigo_incidencia`),
  ADD KEY `codigo_tecnico` (`codigo_tecnico`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigo_trabajador` (`codigo_trabajador`),
  ADD KEY `codigo_jefe` (`codigo_jefe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `incidencia_ibfk_1` FOREIGN KEY (`codigo_trabajador`) REFERENCES `trabajadores` (`codigo`);

--
-- Filtros para la tabla `incidencia_resuelta`
--
ALTER TABLE `incidencia_resuelta`
  ADD CONSTRAINT `incidencia_resuelta_ibfk_1` FOREIGN KEY (`codigo_incidencia`) REFERENCES `incidencia` (`codigo`),
  ADD CONSTRAINT `incidencia_resuelta_ibfk_2` FOREIGN KEY (`codigo_tecnico`) REFERENCES `tecnicos` (`codigo`);

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_ibfk_1` FOREIGN KEY (`codigo_trabajador`) REFERENCES `trabajadores` (`codigo`),
  ADD CONSTRAINT `trabajo_ibfk_2` FOREIGN KEY (`codigo_jefe`) REFERENCES `trabajadores` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
