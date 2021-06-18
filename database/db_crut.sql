-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 17:08:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_crut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviso_de_retiro`
--

CREATE TABLE `aviso_de_retiro` (
  `id_aviso` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `franja_horaria` varchar(15) NOT NULL,
  `volumen` varchar(60) NOT NULL,
  `fotografia` varchar(100) DEFAULT NULL,
  `estado` varchar(10) NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `dni_cartonero` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `requerimiento_de_recibo` varchar(200) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock_cartonero`
--

CREATE TABLE `stock_cartonero` (
  `id_stock` int(11) NOT NULL,
  `id_material` int(11) NOT NULL,
  `dni_cartonero` int(10) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `kilos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_cartonero`
--

CREATE TABLE `vehiculo_cartonero` (
  `id_vehiculo` int(11) NOT NULL,
  `dni_cartonero` int(10) NOT NULL,
  `dominio` varchar(15) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aviso_de_retiro`
--
ALTER TABLE `aviso_de_retiro`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`dni_cartonero`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `dni_cartonero` (`dni_cartonero`),
  ADD KEY `id_material` (`id_material`);

--
-- Indices de la tabla `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  ADD PRIMARY KEY (`id_vehiculo`,`dni_cartonero`),
  ADD KEY `fk_vehiculo_cartonero_cartonero` (`dni_cartonero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aviso_de_retiro`
--
ALTER TABLE `aviso_de_retiro`
  MODIFY `id_aviso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  ADD CONSTRAINT `stock_cartonero_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`),
  ADD CONSTRAINT `stock_cartonero_ibfk_2` FOREIGN KEY (`dni_cartonero`) REFERENCES `cartonero` (`dni_cartonero`);

--
-- Filtros para la tabla `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  ADD CONSTRAINT `fk_vehiculo_cartonero_cartonero` FOREIGN KEY (`dni_cartonero`) REFERENCES `cartonero` (`dni_cartonero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
