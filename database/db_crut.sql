-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2021 a las 03:49:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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

--
-- Volcado de datos para la tabla `aviso_de_retiro`
--

INSERT INTO `aviso_de_retiro` (`id_aviso`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `franja_horaria`, `volumen`, `fotografia`, `estado`, `fecha_entrega`) VALUES
(1, 'Juan', 'Perez', 'Colon 765', '249 456 7890', 'juan@gmail.com', 'De 9 a 12 hs', 'Entra en el baúl de un auto', NULL, 'Pendiente', '2021-07-02'),
(2, 'Maria', 'Gomez', 'Aveleyra 345', '249 458 7658', 'maria@gmail.com', 'De 9 a 12 hs', 'Entra en un camión', 'uploads/images/60df6aebd09bc0.10049520.jpg', 'Pendiente', '2021-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartonero`
--

CREATE TABLE `cartonero` (
  `dni_cartonero` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_vehiculo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartonero`
--

INSERT INTO `cartonero` (`dni_cartonero`, `nombre`, `apellido`, `direccion`, `fecha_nacimiento`, `tipo_vehiculo`) VALUES
(22222222, 'Juan', 'Perez', 'Sin dirección', '2021-07-16', 'Camioneta'),
(25555444, 'Juan Carlos', 'Perez', 'Sin domicilio s/n', '2021-07-25', 'Utilitario'),
(25555555, 'Tomas', 'Pascualetti', 'FONAVI 94', '2021-07-29', 'Camioneta');

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

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_material`, `nombre`, `requerimiento_de_recibo`, `img`) VALUES
(3, 'Carton', 'Limpio', 'uploads/images/60dc87675a89d5.31939440.png'),
(5, 'Lata', 'Sin Filo. Cerradas.', 'uploads/images/60df469f869576.34319341.png'),
(6, 'Plástico', 'Limpio. Sin color.', 'uploads/images/60df46def0ab25.71216548.png'),
(7, 'Vidrio', 'Sin romper', 'uploads/images/60df6921993010.09291869.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_secretaria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_secretaria`, `nombre`, `email`, `contrasenia`) VALUES
(23322505, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock_cartonero`
--

CREATE TABLE `stock_cartonero` (
  `id_stock` int(11) NOT NULL,
  `id_material` int(10) NOT NULL,
  `dni_cartonero` int(15) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `kilos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock_cartonero`
--

INSERT INTO `stock_cartonero` (`id_stock`, `id_material`, `dni_cartonero`, `fecha_entrega`, `kilos`) VALUES
(1, 3, 23322505, '2021-06-30', 90),
(2, 3, 23322505, '2021-06-30', 100),
(3, 4, 23322505, '2021-06-30', 45),
(4, 3, 23322505, '2021-07-02', 100),
(5, 3, 23322505, '2021-07-02', 90),
(6, 4, 23322505, '2021-07-02', 45),
(7, 3, 25555555, '2021-07-02', 70),
(8, 6, 25555555, '2021-07-02', 70),
(9, 5, 25555555, '2021-07-02', 90),
(10, 7, 25555555, '2021-07-02', 200);

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
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`);

--
-- Indices de la tabla `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  ADD PRIMARY KEY (`id_stock`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aviso_de_retiro`
--
ALTER TABLE `aviso_de_retiro`
  MODIFY `id_aviso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
