-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2019 a las 04:50:14
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `NumDocumento` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `tipo_cliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `NumDocumento`, `Nombres`, `Telefono`, `direccion`, `tipo_cliente`) VALUES
(11, 2147483647, 'Juan de Arco', 2147483647, 'Cra 100 #40 -30 sur', 'Frecuente'),
(12, 2147483647, 'Juan de Arco', 2147483647, 'Cra 100 #40 -30 sur', 'Frecuente'),
(13, 37387, 'Juan de Arco', 687989089, 'Cra 100 #40 -30 sur', 'Frecuente'),
(14, 1030670361, 'Carlos Mauricio Pinilla', 3289567, 'Cra 100 #40 -30 sur', 'Frecuente'),
(15, 192847433, 'Juan de Arco', 2108912809, '1897378', 'Frecuente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `idComida` int(11) NOT NULL,
  `nombre_comida` varchar(45) NOT NULL,
  `tipo_comida` varchar(45) NOT NULL,
  `precio_comida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`idComida`, `nombre_comida`, `tipo_comida`, `precio_comida`) VALUES
(1, 'Espresso', 'Liquido', 5000),
(2, 'Chocolate', 'Liquido', 5000),
(3, 'Combos Coffee Tree', 'Grasa', 12000),
(4, 'Baguis', 'Grasa', 15000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `idMultiplex` int(11) NOT NULL,
  `nombre_empleado` varchar(45) NOT NULL,
  `numero_telefono` int(11) NOT NULL,
  `fecha_Contrato` date NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idSillas` int(11) NOT NULL,
  `idComida` int(11) NOT NULL,
  `CantidadSillas` int(11) NOT NULL,
  `CantidadComida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multiplex`
--

CREATE TABLE `multiplex` (
  `idMultiplex` int(11) NOT NULL,
  `nombre_multiplex` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `multiplex`
--

INSERT INTO `multiplex` (`idMultiplex`, `nombre_multiplex`) VALUES
(1, 'Titan'),
(2, 'Unicentro'),
(3, 'Plaza Central'),
(4, 'Gran Estacion'),
(5, 'Embajador'),
(6, 'Las americas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

CREATE TABLE `puntos` (
  `idPuntos` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `TotalPuntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `idSala` int(11) NOT NULL,
  `idMultiplex` int(11) NOT NULL,
  `Cantidadfilas` int(11) NOT NULL,
  `CantidadColumnas` int(11) NOT NULL,
  `nombre_sala` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`idSala`, `idMultiplex`, `Cantidadfilas`, `CantidadColumnas`, `nombre_sala`) VALUES
(1, 1, 5, 5, 'Avengers'),
(2, 1, 5, 5, 'Rec'),
(3, 2, 5, 5, 'Rapido y furioso'),
(4, 3, 5, 5, 'Cars'),
(5, 4, 5, 5, 'Capitan america'),
(6, 5, 5, 5, 'Polo'),
(7, 6, 5, 5, 'Carmen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `silla`
--

CREATE TABLE `silla` (
  `idSillas` int(11) NOT NULL,
  `idSala` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `UbicacionColumna` varchar(45) NOT NULL,
  `UbicacionFila` varchar(45) NOT NULL,
  `Estado` int(11) NOT NULL,
  `tipo_silla` varchar(45) NOT NULL,
  `precio_silla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `silla`
--

INSERT INTO `silla` (`idSillas`, `idSala`, `idCliente`, `UbicacionColumna`, `UbicacionFila`, `Estado`, `tipo_silla`, `precio_silla`) VALUES
(6, 1, 14, 3, 1, 0, 'Profesional', 12000),
(7, 1, 14, 3, 1, 0, 'Profesional', 500000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`idComida`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `idMultiplex` (`idMultiplex`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idSillas` (`idSillas`),
  ADD KEY `idComida` (`idComida`);

--
-- Indices de la tabla `multiplex`
--
ALTER TABLE `multiplex`
  ADD PRIMARY KEY (`idMultiplex`);

--
-- Indices de la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD PRIMARY KEY (`idPuntos`),
  ADD KEY `idFactura` (`idFactura`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idSala`),
  ADD KEY `idMultiplex` (`idMultiplex`);

--
-- Indices de la tabla `silla`
--
ALTER TABLE `silla`
  ADD PRIMARY KEY (`idSillas`),
  ADD KEY `idSala` (`idSala`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `idComida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `multiplex`
--
ALTER TABLE `multiplex`
  MODIFY `idMultiplex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `puntos`
--
ALTER TABLE `puntos`
  MODIFY `idPuntos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `silla`
--
ALTER TABLE `silla`
  MODIFY `idSillas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idMultiplex`) REFERENCES `multiplex` (`idMultiplex`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idSillas`) REFERENCES `silla` (`idSillas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`idComida`) REFERENCES `comida` (`idComida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntos`
--
ALTER TABLE `puntos`
  ADD CONSTRAINT `puntos_ibfk_1` FOREIGN KEY (`idFactura`) REFERENCES `factura` (`idFactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puntos_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`idMultiplex`) REFERENCES `multiplex` (`idMultiplex`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `silla`
--
ALTER TABLE `silla`
  ADD CONSTRAINT `silla_ibfk_1` FOREIGN KEY (`idSala`) REFERENCES `sala` (`idSala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `silla_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
