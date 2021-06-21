-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 03:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crut`
--

-- --------------------------------------------------------

--
-- Table structure for table `aviso_de_retiro`
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
-- Dumping data for table `aviso_de_retiro`
--

INSERT INTO `aviso_de_retiro` (`id_aviso`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `franja_horaria`, `volumen`, `fotografia`, `estado`, `fecha_entrega`) VALUES
(1, 'Santiago', 'Pérez', 'Alem 203', '2494730199', 'sperez@gmail.com', 'De 9 a 12 hs', 'Entra en una caja', NULL, 'Pendiente', '2021-06-21'),
(2, 'Yanina', 'Álvarez', 'Paso 890', '2494550138', 'yalvarez@gmail.com', 'De 13 a 17 hs', 'Entra en la caja de una camioneta', 'uploads/images/60d06ddb17a420.78275732.jpg', 'Pendiente', '2021-06-21'),
(3, 'Patricia', 'Ramos', 'Uribe 201', '2494771900', 'puribe@gmail.com', 'De 9 a 12 hs', 'Entra en el baúl de un auto', NULL, 'Pendiente', '2021-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `cartonero`
--

CREATE TABLE `cartonero` (
  `dni_cartonero` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartonero`
--

INSERT INTO `cartonero` (`dni_cartonero`, `nombre`, `apellido`, `direccion`, `fecha_nacimiento`) VALUES
(13030812, 'Eladio', 'Sosa', 'San Martín 1402', '1948-11-06'),
(17643933, 'Mariana', 'Burgoa', 'Solis 1812', '1956-02-20'),
(20837099, 'Eduardo', 'Casas', 'Petriz 125', '1973-05-12'),
(22090381, 'Isabela', 'Galván', 'Elcano 998', '1966-01-10'),
(28983182, 'Valentín', 'Díaz', 'Peñasco 232', '1985-11-01'),
(30719337, 'Bárbara', 'Bonifacio', 'Constitución 1468', '1982-03-04'),
(33093118, 'Fabiana', 'Hernández', 'Asunción 102', '1983-05-29'),
(34962192, 'Mauro', 'Lombardo', 'Aveleyra 322', '1988-10-22'),
(39701232, 'Serafín', 'Leonídas', 'Tacuarembó 124', '1999-11-08'),
(40243991, 'Ursula', 'Noguera', 'Pueyrredon 711', '2001-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `requerimiento_de_recibo` varchar(200) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `nombre`, `requerimiento_de_recibo`, `img`) VALUES
(3, 'cartón', 'seco', 'uploads/images/60d076a1e1f401.31969202.png'),
(4, 'lata', 'evitar filo', 'uploads/images/60d076c3024c00.50696574.png'),
(5, 'madera', 'sin barnizar', 'uploads/images/60d076e2390c46.41898469.png'),
(6, 'papel', 'apilarlo con piola', 'uploads/images/60d076f7be9237.49331250.png'),
(7, 'plástico', 'No PVC', 'uploads/images/60d0770fddca55.24109897.png'),
(8, 'vidrio', 'envolver en diario', 'uploads/images/60d0772bb37ee4.03265189.png');

-- --------------------------------------------------------

--
-- Table structure for table `stock_cartonero`
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
-- Table structure for table `vehiculo_cartonero`
--

CREATE TABLE `vehiculo_cartonero` (
  `id_vehiculo` int(11) NOT NULL,
  `dni_cartonero` int(10) NOT NULL,
  `dominio` varchar(15) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aviso_de_retiro`
--
ALTER TABLE `aviso_de_retiro`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indexes for table `cartonero`
--
ALTER TABLE `cartonero`
  ADD PRIMARY KEY (`dni_cartonero`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `dni_cartonero` (`dni_cartonero`),
  ADD KEY `id_material` (`id_material`);

--
-- Indexes for table `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  ADD PRIMARY KEY (`id_vehiculo`,`dni_cartonero`),
  ADD KEY `fk_vehiculo_cartonero_cartonero` (`dni_cartonero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aviso_de_retiro`
--
ALTER TABLE `aviso_de_retiro`
  MODIFY `id_aviso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stock_cartonero`
--
ALTER TABLE `stock_cartonero`
  ADD CONSTRAINT `stock_cartonero_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`),
  ADD CONSTRAINT `stock_cartonero_ibfk_2` FOREIGN KEY (`dni_cartonero`) REFERENCES `cartonero` (`dni_cartonero`);

--
-- Constraints for table `vehiculo_cartonero`
--
ALTER TABLE `vehiculo_cartonero`
  ADD CONSTRAINT `fk_vehiculo_cartonero_cartonero` FOREIGN KEY (`dni_cartonero`) REFERENCES `cartonero` (`dni_cartonero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
