-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-08-2016 a las 09:34:03
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sales_umk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `IdAE` int(11) NOT NULL,
  `Actividad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `actividad`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ae`
--

CREATE TABLE IF NOT EXISTS `ae` (
  `IdPlan` int(11) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `IdAE` int(11) DEFAULT NULL,
  `IdEje` int(11) DEFAULT NULL,
  `Contacto1` bit(1) DEFAULT NULL,
  `Contacto2` bit(1) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Observacion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `ae`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `IdPlan` int(11) NOT NULL,
  `IdVendedor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Ruta` varchar(10) NOT NULL,
  `Zona` varchar(50) DEFAULT NULL,
  `Revidado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdPlan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `agenda`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dpedido`
--

CREATE TABLE IF NOT EXISTS `dpedido` (
  `IdDP` int(11) NOT NULL,
  `IdPedido` int(11) DEFAULT NULL,
  `IdArticulo` varchar(50) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Cantidad` float DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  PRIMARY KEY (`IdDP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `dpedido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejecutiva`
--

CREATE TABLE IF NOT EXISTS `ejecutiva` (
  `IdEje` int(11) NOT NULL,
  `IdAE` int(11) NOT NULL,
  `Actividad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `ejecutiva`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `IdPedido` int(11) NOT NULL,
  `IdVendedor` int(11) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Vendedor` varchar(150) DEFAULT NULL,
  `Cliente` varchar(150) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `TM` bit(1) DEFAULT NULL,
  `FP` bit(1) DEFAULT NULL,
  `Plazo` varchar(50) DEFAULT NULL,
  `Descuento` float DEFAULT NULL,
  `IVA` float DEFAULT NULL,
  `Nota` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`IdPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `pedido`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rdetalle`
--

CREATE TABLE IF NOT EXISTS `rdetalle` (
  `IdRD` int(11) NOT NULL,
  `IdRecibo` int(11) NOT NULL,
  `NFactura` varchar(50) NOT NULL,
  `FValor` float DEFAULT NULL,
  `ValorNC` float DEFAULT NULL,
  `Retencion` float NOT NULL,
  `Descuento` float NOT NULL,
  `VRecibo` float DEFAULT NULL,
  `Saldo` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `rdetalle`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE IF NOT EXISTS `recibo` (
  `IdRecibo` int(11) NOT NULL,
  `IdCliente` varchar(50) NOT NULL,
  `IdVendedor` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `MRecibo` float DEFAULT NULL,
  `TC` float DEFAULT NULL,
  `TM` bit(1) DEFAULT NULL,
  `Recibimos` varchar(250) DEFAULT NULL,
  `LCantidad` varchar(250) DEFAULT NULL,
  `Concepto` varchar(250) DEFAULT NULL,
  `Efectivo` bit(1) DEFAULT NULL,
  `CHK` bit(1) DEFAULT NULL,
  `NumCHK` varchar(50) DEFAULT NULL,
  `Banco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `recibo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semanas`
--

CREATE TABLE IF NOT EXISTS `semanas` (
  `IdPlan` int(11) NOT NULL,
  `Semana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `semanas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `UsuarioID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de usuario',
  `NombreUsuario` varchar(100) NOT NULL COMMENT 'Nombre de Usuario',
  `Password` varchar(20) NOT NULL COMMENT 'Contraseña de Usuario',
  `Privilegios` int(11) NOT NULL COMMENT 'Privilegios de Usuarios',
  `Activo` bit(1) NOT NULL,
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de Creación de Usuario',
  PRIMARY KEY (`UsuarioID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `NombreUsuario`, `Password`, `Privilegios`, `Activo`, `FechaCreacion`) VALUES
(1, 'admin', '123', 0, b'0', '2016-06-20'),
(2, 'Service', '123', 2, b'0', '2016-06-20'),
(3, 'Administrativo', '123', 1, b'0', '2016-06-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vclientes`
--

CREATE TABLE IF NOT EXISTS `vclientes` (
  `IdPlan` int(11) NOT NULL,
  `Lunes` varchar(50) DEFAULT NULL,
  `Martes` varchar(50) DEFAULT NULL,
  `Miercoles` varchar(50) DEFAULT NULL,
  `Jueves` varchar(50) DEFAULT NULL,
  `Viernes` varchar(50) DEFAULT NULL,
  `Sabado` varchar(50) DEFAULT NULL,
  `Observaciones` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `vclientes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `IdPlan` int(11) DEFAULT NULL,
  `IdCliente` varchar(50) DEFAULT NULL,
  `Visitado` bit(1) DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `visitas`
--

