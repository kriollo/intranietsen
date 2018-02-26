-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2018 a las 13:39:05
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranietsen`
--
CREATE DATABASE IF NOT EXISTS `intranietsen` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `intranietsen`;

DELIMITER $$
--
-- Funciones
--
DROP FUNCTION IF EXISTS `validate_rut`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `validate_rut` (`RUT` VARCHAR(12)) RETURNS INT(11) BEGIN
	DECLARE strlen INT;
	DECLARE i INT;
	DECLARE j INT;
	DECLARE suma NUMERIC;
	DECLARE temprut VARCHAR(12);
	DECLARE verify_dv CHAR(2);
	DECLARE DV CHAR(1);
	SET RUT = REPLACE(REPLACE(RUT, '.', ''),'-','');
	SET DV = SUBSTR(RUT,-1,1);
	SET RUT = SUBSTR(RUT,1,LENGTH(RUT)-1);
	SET i = 1;
  	SET strlen = LENGTH(RUT);
  	SET j = 2;
  	SET suma = 0;
	IF strlen = 8 OR strlen = 7 THEN
		SET temprut = REVERSE(RUT);
		moduloonce: LOOP
		    IF i <= LENGTH(temprut) THEN
    			SET suma = suma + (CONVERT(SUBSTRING(temprut, i, 1),UNSIGNED INTEGER) * j); 
	      		SET i = i + 1;
	      		IF j = 7 THEN
		    		SET j = 2;
	    		ELSE
	    			SET j = j + 1;
    			END IF;
	      		ITERATE moduloonce;
		    END IF;
		    LEAVE moduloonce;
	  	END LOOP moduloonce;
	  	SET verify_dv = 11 - (suma % 11);
	  	IF verify_dv = 11 THEN
	  		SET verify_dv = 0;
	  	ELSEIF verify_dv = 10 THEN 
	  		SET verify_dv = 'K';
	  	END IF;
	  	IF DV = verify_dv THEN
	  		RETURN 1;
	  	ELSE 
	  		RETURN 0;
	  	END IF;
	END IF;
	RETURN 0;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `impuesto` double NOT NULL,
  `tipo_moneda` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ext_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `telefono`, `email`, `impuesto`, `tipo_moneda`, `direccion`, `ciudad`, `comuna`, `region`, `ext_logo`) VALUES
(1, 'CABLE NIELSEN LTDA', '+56 9', 'contacto@nielsen.cl', 19, '$', 'Piloto Lazo 90', 'Santiago', 'Cerrillos', 'Metropolitana', 'png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblactividad`
--

DROP TABLE IF EXISTS `tblactividad`;
CREATE TABLE `tblactividad` (
  `id_actividad` int(11) NOT NULL,
  `actividad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `cierre_seguro` int(11) NOT NULL DEFAULT '0',
  `certificacion` int(11) NOT NULL DEFAULT '0',
  `speed_test` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblactividad`
--

INSERT INTO `tblactividad` (`id_actividad`, `actividad`, `estado`, `cierre_seguro`, `certificacion`, `speed_test`) VALUES
(1, 'ALTA 1 Cable', 1, 0, 0, 0),
(2, 'ALTA 2', 1, 0, 0, 0),
(3, 'ALTA 3', 1, 0, 0, 0),
(4, 'RX', 1, 0, 0, 0),
(5, 'SSTT', 1, 1, 0, 0),
(6, 'PETVA', 1, 0, 0, 0),
(7, 'PREMIUM', 1, 0, 0, 0),
(8, 'TRASLADO', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblareas`
--

DROP TABLE IF EXISTS `tblareas`;
CREATE TABLE `tblareas` (
  `id_area` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblareas`
--

INSERT INTO `tblareas` (`id_area`, `descripcion`) VALUES
(1, 'HELPDESK SOPORTE OPERACIONAL'),
(2, 'DESPACHO'),
(3, 'REDES NIELSEN'),
(4, 'Centro de Comando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblasistenciatecnico`
--

DROP TABLE IF EXISTS `tblasistenciatecnico`;
CREATE TABLE `tblasistenciatecnico` (
  `id` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `fechahora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblasistenciatecnico`
--

INSERT INTO `tblasistenciatecnico` (`id`, `id_tecnico`, `id_user`, `fechahora`, `estado`) VALUES
(1, 1, 28, '2018-02-22 15:41:25', 'Presente'),
(3, 6, 28, '2018-02-23 16:30:08', 'Presente'),
(4, 3, 28, '2018-02-23 16:30:11', 'Presente'),
(6, 1, 28, '2018-02-23 16:30:28', 'Presente'),
(7, 5, 28, '2018-02-23 16:38:41', 'Vacaciones'),
(8, 7, 28, '2018-02-23 16:38:42', 'Licencia'),
(9, 10, 28, '2018-02-23 16:38:44', 'Permiso'),
(10, 1, 28, '2018-02-26 09:22:02', 'Presente'),
(11, 6, 28, '2018-02-26 09:22:04', 'Presente'),
(12, 10, 28, '2018-02-26 09:22:06', 'Licencia'),
(13, 3, 28, '2018-02-26 09:23:24', 'Presente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblausencias`
--

DROP TABLE IF EXISTS `tblausencias`;
CREATE TABLE `tblausencias` (
  `id_tblausencias` int(11) NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_ausencia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `usu_registra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechamod` date DEFAULT NULL,
  `id_area` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblausencias`
--

INSERT INTO `tblausencias` (`id_tblausencias`, `rut`, `tipo_ausencia`, `observacion`, `desde`, `hasta`, `usu_registra`, `fechamod`, `id_area`) VALUES
(7, '25939970', 'Con Licencia', '2132132 observacion\r\nprueba\r\nde ingreso', '2017-11-22', '2017-11-22', '2', '2017-11-22', 1),
(2, '19063731', 'Con Licencia', 'f', '2017-11-21', '2017-11-21', '16', '2017-11-21', 1),
(8, '25637138', 'Con Licencia', 'test', '2018-01-03', '2018-01-04', '2', '2018-01-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbloque`
--

DROP TABLE IF EXISTS `tblbloque`;
CREATE TABLE `tblbloque` (
  `id_bloque` int(11) NOT NULL,
  `bloque` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `limite_q_programacion` int(11) NOT NULL DEFAULT '280',
  `desde` time NOT NULL,
  `hasta` time NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblbloque`
--

INSERT INTO `tblbloque` (`id_bloque`, `bloque`, `limite_q_programacion`, `desde`, `hasta`, `estado`) VALUES
(1, '10-13', 280, '10:00:00', '12:59:00', 1),
(2, '13-16', 280, '13:00:00', '15:59:00', 1),
(3, '16-19', 280, '16:00:00', '18:59:00', 1),
(4, '19-22', 280, '19:00:00', '22:00:00', 1),
(5, '.....', 280, '10:00:00', '22:00:00', 1),
(6, 'AM', 284, '10:00:00', '13:59:00', 1),
(7, 'PM', 280, '14:00:00', '22:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcargos`
--

DROP TABLE IF EXISTS `tblcargos`;
CREATE TABLE `tblcargos` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblcargos`
--

INSERT INTO `tblcargos` (`id_cargo`, `descripcion`) VALUES
(1, 'Supervisor HD'),
(2, 'Ejecutivo HD'),
(3, 'Jefe HD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomuna`
--

DROP TABLE IF EXISTS `tblcomuna`;
CREATE TABLE `tblcomuna` (
  `id_comuna` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `zona` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `cod_sub_zona` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `territorio` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblcomuna`
--

INSERT INTO `tblcomuna` (`id_comuna`, `nombre`, `estado`, `zona`, `cod_sub_zona`, `territorio`) VALUES
(1, 'MAIP', 1, 'ZMET', 'ZMNO', 'METRO SUR PONIENTE'),
(2, 'CERR', 1, 'ZMET', 'ZMNO', 'METRO SUR PONIENTE'),
(3, 'RECO', 1, 'ZMET', 'ZMNO', 'METRO SUR PONIENTE'),
(4, 'PACE', 1, 'ZMET', 'ZMSU', 'METRO SUR PONIENTE'),
(5, 'INDE', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(6, 'QNOR', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(7, 'RENC', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(8, 'QUIL', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(9, 'HUEC', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(10, 'LPRA', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(11, 'CNCH', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(12, 'LAMP', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE'),
(13, 'COLI', 1, 'ZMET', 'ZMNO', 'METRO NOR PONIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcuadrante`
--

DROP TABLE IF EXISTS `tblcuadrante`;
CREATE TABLE `tblcuadrante` (
  `id_cuadrante` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_comuna` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nodo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblcuadrante`
--

INSERT INTO `tblcuadrante` (`id_cuadrante`, `nombre`, `cod_comuna`, `nodo`) VALUES
(1, 'MAIP-1', 'MAIP', '01'),
(2, 'MAIP-2', 'MAIP', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhistorico`
--

DROP TABLE IF EXISTS `tblhistorico`;
CREATE TABLE `tblhistorico` (
  `id_reg` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `n_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `accion` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'REAGENDAMIENTO',
  `observacion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblhistorico`
--

INSERT INTO `tblhistorico` (`id_reg`, `id_orden`, `n_orden`, `fecha`, `hora`, `accion`, `observacion`, `id_user`) VALUES
(9, 7, 314586792, '2018-02-06', '2018-02-13 14:06:03', 'REAGENDAMIENTO', 'qwqwewqe', 2),
(8, 7, 314586792, '2018-02-13', '2018-02-13 14:05:21', 'REDES', 'test', 28),
(7, 6, 314522077, '2018-02-13', '2018-02-13 13:53:13', 'CIERRE', 'Orden cerrada', 28),
(6, 9, 123466, '2018-02-13', '2018-02-13 13:52:16', 'FINALIZADO', 'Orden Finalizada', 28),
(10, 5, 314412474, '2018-02-15', '2018-02-15 19:10:28', 'CIERRE', 'Orden cerrada', 28),
(11, 6, 314522077, '2018-02-15', '2018-02-15 19:20:39', 'REDES', 'niveles', 28),
(12, 6, 314522077, '2018-02-06', '2018-02-15 19:21:24', 'REAGENDAMIENTO', 'wd', 2),
(13, 11, 1234567, '2018-02-15', '2018-02-15 20:45:41', 'OTROS', 'ttyyty', 28),
(14, 9, 123466, '2018-02-15', '2018-02-15 20:47:41', 'CIERRE', 'Orden cerrada', 28),
(15, 8, 54656576, '2018-02-16', '2018-02-16 13:24:15', 'CIERRE', 'Orden cerrada', 28),
(16, 13, 4535345, '2018-02-16', '2018-02-16 13:24:47', 'CIERRE', 'Orden cerrada', 28),
(17, 7, 314586792, '2018-02-16', '2018-02-16 14:28:36', 'CIERRE', 'Orden cerrada', 28),
(18, 14, 123123123, '2018-02-20', '2018-02-20 13:33:25', 'CIERRE', 'Orden cerrada', 28),
(19, 13, 4535345, '2018-02-20', '2018-02-20 20:25:06', 'CIERRE', 'Orden cerrada', 28),
(20, 9, 123466, '2018-02-21', '2018-02-21 20:22:46', 'CIERRE', 'Orden cerrada', 28),
(21, 5, 314412474, '2018-02-21', '2018-02-21 20:24:04', 'CIERRE', 'Orden cerrada', 28),
(22, 12, 5122522, '2018-02-22', '2018-02-22 16:54:07', 'FINALIZADO', 'Orden Finalizada', 28),
(23, 10, 123456, '2018-02-22', '2018-02-22 16:55:12', 'CIERRE', 'Orden cerrada', 28),
(24, 9, 123466, '2018-02-22', '2018-02-22 17:04:57', 'CIERRE', 'Orden cerrada', 28),
(25, 11, 1234567, '2018-02-22', '2018-02-22 19:06:16', 'OTROS', '...', 28),
(26, 11, 1234567, '2018-02-14', '2018-02-22 19:06:38', 'REAGENDAMIENTO', '12321323', 2),
(27, 6, 314522077, '2018-02-22', '2018-02-22 21:20:06', 'CIERRE', 'Orden cerrada', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmenu`
--

DROP TABLE IF EXISTS `tblmenu`;
CREATE TABLE `tblmenu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `PosI` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `glyphicon` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblmenu`
--

INSERT INTO `tblmenu` (`id_menu`, `PosI`, `descripcion`, `glyphicon`) VALUES
(1, 1, 'CONFIRMACION', 'fa-calendar-check-o '),
(99, 99, 'ADMINISTRACIÓN', 'fa-user'),
(2, 4, 'RR HH', 'fa-users'),
(7, 3, 'DESPACHO', 'fa-flag-checkered'),
(6, 2, 'COORDINACION', 'fa-map-signs ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmotivollamado`
--

DROP TABLE IF EXISTS `tblmotivollamado`;
CREATE TABLE `tblmotivollamado` (
  `id_motivo` int(11) NOT NULL,
  `motivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblmotivollamado`
--

INSERT INTO `tblmotivollamado` (`id_motivo`, `motivo`, `estado`) VALUES
(1, 'CONF', 1),
(2, 'ATDO', 1),
(3, 'RENO', 1),
(4, 'ADEL', 1),
(5, 'PROV', 1),
(6, 'SIMO', 1),
(7, 'CATA', 1),
(8, 'MATE', 1),
(9, 'INTE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblordenes`
--

DROP TABLE IF EXISTS `tblordenes`;
CREATE TABLE `tblordenes` (
  `id_orden` int(11) NOT NULL,
  `n_orden` int(11) NOT NULL,
  `reg` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rut_cliente` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_compromiso` date NOT NULL,
  `bloque` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nodo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `subnodo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tipoorden` int(11) NOT NULL DEFAULT '1',
  `motivo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `actividad` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `operador` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_dia` date NOT NULL,
  `id_usuario_despacho` int(11) NOT NULL,
  `codigo_tecnico` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `fecha_hora_asigna` datetime NOT NULL,
  `estado_orden` smallint(6) NOT NULL DEFAULT '1',
  `prioridad` smallint(6) NOT NULL DEFAULT '1',
  `ubicacion` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'CONFIRMACION',
  `id_ejecutivo_cierre` int(11) NOT NULL DEFAULT '0',
  `speed_test` int(11) NOT NULL DEFAULT '0',
  `certificacion` int(11) NOT NULL DEFAULT '0',
  `cierre_seguro` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblordenes`
--

INSERT INTO `tblordenes` (`id_orden`, `n_orden`, `reg`, `rut_cliente`, `fecha_compromiso`, `bloque`, `comuna`, `nodo`, `subnodo`, `tipoorden`, `motivo`, `actividad`, `resultado`, `observacion`, `operador`, `fecha_dia`, `id_usuario_despacho`, `codigo_tecnico`, `fecha_hora_asigna`, `estado_orden`, `prioridad`, `ubicacion`, `id_ejecutivo_cierre`, `speed_test`, `certificacion`, `cierre_seguro`) VALUES
(2, 1221212, '', '15889905-1', '2018-02-06', '19-22', 'MAIP', '01', '202', 1, 'ATDO', 'ALTA 1', '18', '12qwqwqw', '1', '2018-02-06', 0, '0', '0000-00-00 00:00:00', 1, 4, 'CONFIRMACION', 0, 0, 0, 0),
(3, 12341, '', '15889905-1', '2018-02-06', '19-22', 'HUEC', '23', '123', 1, 'RENO', 'ALTA 1', '1', '123123', '2', '2018-02-06', 21, '0', '2018-02-22 10:17:00', 1, 1, 'DESPACHO', 0, 0, 0, 0),
(4, 312847306, '', '8770904-3', '2018-02-06', '19-22', 'RENC', '202ssss', '202ddd', 3, 'CONF', 'SSTT', '1', 'qweqwewqeddddd', '2', '2018-02-06', 28, '0', '2018-02-20 15:50:00', 1, 0, 'DESPACHO', 0, 0, 0, 0),
(5, 314412474, '', '14055124-4', '2018-02-06', '19-22', 'RENC', '01', '123', 4, 'CONF', 'ALTA 1 Cable', '1', '123123123', '1', '2018-01-24', 28, '0', '2018-02-21 12:40:00', 1, 3, 'DESPACHO', 28, 1, 0, 0),
(6, 314522077, '', '6602154-8', '2018-02-15', '19-22', 'INDE', 'wqewe', 'qweqwe', 2, 'CONF', 'SSTT', '1', 'wd', '1', '2018-01-24', 28, '6', '2018-02-22 17:07:00', 1, 1, 'CIERRE', 0, 0, 0, 0),
(7, 314586792, '', '7825841-1', '2018-02-13', '19-22', 'RENC', '123', '23', 2, 'CONF', 'ALTA 2', '1', 'qwqwewqe', '1', '2018-01-24', 28, '0', '2018-02-21 12:42:00', 1, 1, 'DESPACHO', 0, 0, 0, 0),
(8, 54656576, '', '15889905-1', '2018-02-06', '19-22', 'HUEC', '123', '123', 2, 'PROV', 'SSTT', '1', '123213123', '1', '2018-02-06', 21, '0', '2018-02-22 10:17:00', 1, 1, 'DESPACHO', 0, 0, 0, 0),
(9, 123466, '', '15889905-1', '2018-02-06', '19-22', 'INDE', '12', '12', 1, 'CONF', 'ALTA 1 Cable', '1', '1212121', '1', '2018-01-31', 28, '1', '2018-02-22 16:44:00', 10, 0, 'DESPACHO', 28, 1, 0, 0),
(10, 123456, '', '15889905-1', '2018-02-14', '10-13', 'INDE', '1', '12', 3, 'CONF', 'SSTT', '1', '12321323', '28', '2018-02-14', 28, '0', '2018-02-22 14:05:00', 1, 3, 'DESPACHO', 28, 0, 0, 1),
(11, 1234567, '', '158899051', '2018-02-22', '19-22', 'INDE', '2', '21', 3, 'ATDO', 'SSTT', '1', '12321323', '28', '2018-02-14', 28, '6', '2018-02-22 15:35:00', 1, 3, 'DESPACHO', 0, 0, 0, 0),
(16, 2147483647, '', '15889905-1', '2018-02-19', '13-16', 'CNCH', '4', '4', 2, 'CONF', 'ALTA 1 Cable', '1', '123123123', '28', '2018-02-19', 0, '0', '2018-02-22 14:00:00', 1, 1, 'CONFIRMACION', 0, 0, 0, 0),
(12, 5122522, '', '15889905-1', '2018-02-15', '16-19', 'INDE', '1', '1', 2, 'CATA', 'ALTA 1 Cable', '1', '123123213', '28', '2018-02-15', 28, '0', '2018-02-22 13:44:00', 1, 1, 'DESPACHO', 0, 0, 0, 0),
(13, 4535345, '', '15889905-1', '2018-02-15', '16-19', 'CNCH', '234', '234', 1, 'CONF', 'ALTA 1 Cable', '1', 'gasgasgaga', '28', '2018-02-15', 0, '0', '2018-02-20 10:37:00', 1, 4, 'CONFIRMACION', 28, 0, 0, 0),
(14, 123123123, '', '15889905-1', '2018-02-15', 'PM', 'INDE', '12', '123', 1, 'CATA', 'ALTA 1 Cable', '1', 'wwerrer 12112333333', '28', '2018-02-15', 0, '0', '2018-02-20 10:21:00', 1, 4, 'CONFIRMACION', 28, 0, 0, 1),
(15, 2147483647, '', '15889905-1', '2018-02-16', '19-22', 'MAIP', '02', '12', 1, 'CONF', 'ALTA 1 Cable', '1', 'TEST', '28', '2018-02-16', 0, '0', '0000-00-00 00:00:00', 1, 4, 'CONFIRMACION', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfiles`
--

DROP TABLE IF EXISTS `tblperfiles`;
CREATE TABLE `tblperfiles` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(35) CHARACTER SET latin1 NOT NULL,
  `id_menu` int(10) NOT NULL DEFAULT '0',
  `id_submenu` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblperfiles`
--

INSERT INTO `tblperfiles` (`id`, `nombre`, `id_menu`, `id_submenu`) VALUES
(117, 'HD_SUPERVISOR', 4, 1),
(116, 'HD_SUPERVISOR', 3, 1),
(90, 'HD_USUARIO', 1, 1),
(115, 'HD_SUPERVISOR', 2, 5),
(114, 'HD_SUPERVISOR', 2, 4),
(113, 'HD_SUPERVISOR', 2, 3),
(99, 'HD_JEFATURA', 2, 4),
(98, 'HD_JEFATURA', 2, 3),
(97, 'HD_JEFATURA', 2, 1),
(96, 'HD_JEFATURA', 1, 1),
(112, 'HD_SUPERVISOR', 2, 2),
(111, 'HD_SUPERVISOR', 2, 1),
(110, 'HD_SUPERVISOR', 1, 1),
(167, 'DESPACHO_EJECUTIVO', 7, 5),
(118, 'HD_SUPERVISOR', 5, 1),
(122, 'CONFIRMACION_EJECUTIVO', 1, 1),
(124, 'CONFIRMACION_SUPERVISOR', 1, 1),
(125, 'CONFIRMACION_SUPERVISOR', 1, 2),
(126, 'CONFIRMACION_SUPERVISOR', 2, 2),
(128, 'DESPACHO_SUPERVISOR', 0, 0),
(166, 'DESPACHO_EJECUTIVO', 7, 4),
(165, 'DESPACHO_EJECUTIVO', 7, 3),
(164, 'DESPACHO_EJECUTIVO', 7, 2),
(163, 'DESPACHO_EJECUTIVO', 7, 1),
(162, 'DESPACHO_EJECUTIVO', 6, 4),
(161, 'DESPACHO_EJECUTIVO', 6, 3),
(160, 'DESPACHO_EJECUTIVO', 6, 2),
(159, 'DESPACHO_EJECUTIVO', 6, 1),
(158, 'DESPACHO_EJECUTIVO', 1, 4),
(157, 'DESPACHO_EJECUTIVO', 1, 3),
(156, 'DESPACHO_EJECUTIVO', 1, 2),
(155, 'DESPACHO_EJECUTIVO', 1, 1),
(168, 'DESPACHO_EJECUTIVO', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfilesuser`
--

DROP TABLE IF EXISTS `tblperfilesuser`;
CREATE TABLE `tblperfilesuser` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_submenu` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblperfilesuser`
--

INSERT INTO `tblperfilesuser` (`id`, `id_user`, `id_menu`, `id_submenu`) VALUES
(1, '10', 1, 1),
(1, '11', 1, 1),
(1, '12', 1, 1),
(1, '13', 1, 1),
(1, '14', 1, 1),
(1, '14', 2, 1),
(1, '14', 2, 2),
(1, '14', 2, 3),
(1, '14', 2, 4),
(1, '14', 2, 5),
(1, '14', 3, 1),
(1, '14', 4, 1),
(1, '14', 5, 1),
(1, '15', 1, 1),
(1, '15', 2, 1),
(1, '15', 2, 2),
(1, '15', 2, 3),
(1, '15', 2, 4),
(1, '15', 2, 5),
(1, '15', 3, 1),
(1, '15', 4, 1),
(1, '15', 5, 1),
(1, '16', 0, 0),
(1, '17', 1, 1),
(1, '17', 2, 1),
(1, '17', 2, 2),
(1, '17', 2, 3),
(1, '17', 2, 4),
(1, '17', 2, 5),
(1, '17', 3, 1),
(1, '17', 4, 1),
(1, '17', 5, 1),
(1, '18', 1, 1),
(1, '19', 1, 1),
(1, '2', 1, 1),
(1, '2', 1, 3),
(1, '2', 1, 4),
(1, '2', 2, 1),
(1, '2', 2, 2),
(1, '2', 2, 3),
(1, '2', 2, 4),
(1, '2', 2, 5),
(1, '2', 3, 1),
(1, '2', 4, 1),
(1, '2', 5, 1),
(1, '20', 1, 1),
(1, '21', 1, 1),
(1, '21', 1, 2),
(1, '21', 1, 3),
(1, '21', 1, 4),
(1, '21', 2, 2),
(1, '21', 6, 1),
(1, '21', 6, 2),
(1, '21', 6, 3),
(1, '21', 6, 4),
(1, '21', 7, 1),
(1, '21', 7, 2),
(1, '21', 7, 3),
(1, '21', 7, 4),
(1, '21', 7, 5),
(1, '28', 1, 1),
(1, '28', 1, 2),
(1, '28', 1, 3),
(1, '28', 1, 4),
(1, '28', 2, 2),
(1, '28', 6, 1),
(1, '28', 6, 2),
(1, '28', 6, 3),
(1, '28', 6, 4),
(1, '28', 7, 1),
(1, '28', 7, 2),
(1, '28', 7, 3),
(1, '28', 7, 4),
(1, '28', 7, 5),
(1, '3', 1, 1),
(1, '30', 1, 1),
(1, '31', 1, 1),
(1, '33', 1, 1),
(1, '35', 1, 1),
(1, '38', 1, 1),
(1, '4', 1, 1),
(1, '4', 2, 1),
(1, '40', 1, 1),
(1, '41', 1, 1),
(1, '42', 1, 1),
(1, '43', 1, 1),
(1, '47', 1, 1),
(1, '48', 1, 1),
(1, '49', 1, 1),
(1, '5', 1, 1),
(1, '51', 1, 1),
(1, '52', 1, 1),
(1, '53', 1, 1),
(1, '54', 1, 1),
(1, '55', 1, 1),
(1, '56', 1, 1),
(1, '57', 1, 1),
(1, '6', 1, 1),
(1, '60', 1, 1),
(1, '62', 1, 1),
(1, '63', 1, 1),
(1, '64', 1, 1),
(1, '65', 1, 1),
(1, '66', 1, 1),
(1, '67', 1, 1),
(1, '68', 1, 1),
(1, '69', 1, 1),
(1, '7', 1, 1),
(1, '70', 1, 1),
(1, '8', 1, 1),
(1, '9', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpersonal`
--

DROP TABLE IF EXISTS `tblpersonal`;
CREATE TABLE `tblpersonal` (
  `id_personal` int(11) NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_nacimiento` date NOT NULL,
  `fono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cargo` int(11) NOT NULL DEFAULT '0',
  `id_area` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `estado` smallint(1) NOT NULL DEFAULT '1',
  `id_super` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblpersonal`
--

INSERT INTO `tblpersonal` (`id_personal`, `rut`, `nombres`, `f_nacimiento`, `fono`, `id_cargo`, `id_area`, `id_user`, `estado`, `id_super`) VALUES
(112, '25939970', 'HENKY MENDOZA PEEL', '1978-05-08', '957547833', 2, 1, 0, 0, 0),
(111, '15930005', 'CESAR ZÃºÃ±IGA RAMÃ­REZ', '1986-01-30', '963430575', 2, 1, 0, 1, 109),
(110, '10371223', 'DANIELA PIA CUVARRUBIAS NAVARRETE', '1979-11-01', '964526245', 1, 1, 0, 1, 0),
(109, '16939194', 'CARLOS ANTONIO GONZALEZ PEÃ‘A', '1988-08-31', '964527575', 1, 1, 0, 1, 0),
(108, '15698986', 'PATRICIO ALFONSO BRAVO SILVA', '1984-05-17', '964217456', 1, 2, 0, 1, 0),
(107, '15889905', 'JORGE ANTONIO JARA  HINOJOSA', '1984-04-02', '930248408', 1, 1, 0, 1, 0),
(106, '16005554', 'ALEXANDER JULIAN BERRIOS GARRIDO', '1984-11-28', '951380234', 2, 1, 0, 1, 110),
(105, '13305778', 'HECTOR PATRICIO FIGUEROA CARRASCO', '1976-12-15', '981295014', 2, 1, 0, 0, 0),
(104, '25637138', 'GELEN EUDELIS MONTILLA RAMOS', '1983-06-01', '959820181', 2, 1, 0, 1, 109),
(103, '25940058', 'YADIRA JOSE BERMUDEZ LOPEZ', '1979-03-26', '988140248', 2, 1, 0, 1, 110),
(102, '17312370', 'GERSON ARIEL SALGADO AREVALO', '1988-07-10', '987511767', 2, 1, 0, 1, 109),
(101, '18357690', 'VANLLELO ADMILIAN VERDUGO  NAVARRO', '1993-01-26', '985058920', 2, 1, 0, 1, 110),
(100, '19063731', 'JONATHAN FELIPE VALLE  GOMEZ', '1995-07-28', '987284586', 2, 1, 0, 1, 110),
(99, '17412388', 'GUSTAVO JAVIER VALERIA  MEDEZ', '1989-08-29', '996443920', 2, 1, 0, 1, 110),
(98, '23590775', 'RODOLFO ANDRES URIBE MARDONES', '1981-11-15', '975967883', 2, 1, 0, 1, 110),
(97, '25753973', 'RICARDO JOSE SOTO FERRER', '1989-05-05', '962883054', 2, 1, 0, 1, 110),
(96, '12624268', 'RUBEN SANLLEHI SOTO', '1974-03-08', '956849534', 2, 1, 0, 1, 110),
(95, '13903234', 'LAUTARO NELSON SALINAS  ALVEAR', '1979-12-31', '950055870', 2, 1, 0, 1, 110),
(94, '16393634', 'MAXIMILIANO ARMANDO SALAMANCA  RIQUELME', '1986-12-29', '984895419', 2, 1, 0, 1, 110),
(93, '11637661', 'LUIS HERNAN RODRIGUEZ  MARTINEZ', '1970-02-07', '996923115', 2, 1, 0, 1, 110),
(92, '17736774', 'JEREMIAS ISAAC RAMIREZ  QUEZADA', '1989-04-03', '977903377', 2, 1, 0, 1, 110),
(91, '25853610', 'MARIA JOSE PEREZ  VASQUEZ', '1991-12-11', '11603505', 2, 1, 0, 1, 110),
(90, '13901026', 'CRISTIAN RAUL OLIVARES  FUENTES', '1980-11-24', '951383875', 2, 1, 0, 1, 109),
(89, '17664997', 'NICOLAS FIDEL JARA  VASQUEZ', '1991-01-22', '984458359', 2, 1, 0, 1, 110),
(88, '12896837', 'ARTURO MANASES IZQUIERDO  GOITIA', '1992-12-10', '990196330', 2, 1, 0, 1, 108),
(87, '12182659', 'CLAUDIO ANDRES INOSTROZA GODOY', '1972-10-23', '962143829', 2, 1, 0, 1, 109),
(86, '17793951', 'HECTOR PATRICIO GUTIERREZ  SANCHEZ', '1991-03-22', '985040211', 2, 1, 0, 1, 110),
(85, '16640409', 'ISMAEL IVANOFF GONZALEZ  ENCALADA', '1987-03-06', '990124536', 2, 1, 0, 1, 110),
(84, '16346771', 'PABLO ALFREDO FIERRO  OLEA', '1986-12-11', '982426242', 2, 1, 0, 1, 110),
(83, '19004569', 'CAMILA ALEJANDRA DIAZ RIQUELME', '1995-03-24', '998134250', 2, 1, 0, 1, 108),
(82, '25572474', 'REYNALDO ANDRES DAVIS  FONSECA', '1987-01-14', '946903365', 2, 1, 0, 1, 110),
(81, '12608918', 'BRAYAN LEVI COLINA  DUARTE', '1992-06-06', '957162561', 2, 1, 0, 1, 108),
(80, '25657286', 'EMERSON HELI BRICEÃ‘O  VEGA', '1979-12-20', '972889386', 2, 1, 0, 1, 109),
(79, '17310756', 'ALEJANDRO ARTURO BIZAMA  ASENJO', '7989-09-28', '999734253', 2, 1, 0, 1, 108),
(78, '17370343', 'MARIO EDUARDO ARIAS BERNAL', '1990-04-22', '982251110', 2, 1, 0, 1, 110),
(77, '16691974', 'SIMON CRISTIAN ARAVENA MULLER', '1987-05-21', '987716630', 2, 1, 0, 1, 110),
(76, '18050468', 'FELIPE ANDRES ANDRADE VALENZUELA', '1991-11-26', '986606669', 2, 1, 0, 1, 109),
(75, '13894211', 'JONATHAN LUIS ACEITON  UGAS', '1980-04-26', '930737112', 2, 1, 0, 1, 110);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultado`
--

DROP TABLE IF EXISTS `tblresultado`;
CREATE TABLE `tblresultado` (
  `id_resultado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `cumplimiento` int(11) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblresultado`
--

INSERT INTO `tblresultado` (`id_resultado`, `nombre`, `estado`, `cumplimiento`, `grupo`) VALUES
(1, 'CONFIRMADO', 1, 1, 1),
(2, 'CLIENTE ADELANTA', 1, 1, 1),
(3, 'SIN_CTTO_AD', 1, 0, 0),
(4, 'SIN_CTTO_RENO', 1, 0, 0),
(5, 'SIN_CTTO_CONF', 1, 0, 0),
(6, 'PROVISIONAMIENTO', 1, 0, 0),
(7, 'SIN_CTTO_SIMO', 1, 0, 0),
(8, 'CLIENTE ANULA', 1, 0, 0),
(9, 'CLIENTE ATRASA', 1, 0, 0),
(10, 'DUDA COMERCIAL', 1, 0, 0),
(11, 'SIN_CTTO_ATDO', 1, 0, 0),
(12, 'SERVICIO OK', 1, 0, 0),
(13, 'MAL_AG_ATRASA', 1, 0, 0),
(14, 'CLIENTE INFORMADO', 1, 0, 0),
(15, 'SIN_CTTO_MATE', 1, 0, 0),
(16, 'VOLVER A LLAMAR', 1, 0, 0),
(17, 'NO ADELANTA', 1, 0, 0),
(18, 'A_TERRENO_SIN_CTTO', 1, 0, 0),
(20, 'SIN_CTTO_INTE', 1, 0, 0),
(21, '....', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsubmenu`
--

DROP TABLE IF EXISTS `tblsubmenu`;
CREATE TABLE `tblsubmenu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_submenu` int(10) UNSIGNED NOT NULL,
  `PosS` int(10) UNSIGNED NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `estado` smallint(5) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblsubmenu`
--

INSERT INTO `tblsubmenu` (`id_menu`, `id_submenu`, `PosS`, `url`, `descripcion`, `estado`) VALUES
(99, 2, 2, 'administracion/usuario', 'Usuarios', 1),
(99, 3, 3, 'administracion/perfiles', 'Perfiles', 1),
(2, 1, 1, 'rrhh', 'Principal', 1),
(1, 1, 1, 'confirmacion', 'Principal', 1),
(7, 1, 1, 'despacho', 'Principal', 1),
(6, 1, 1, 'coordinacion', 'Principal', 1),
(99, 1, 1, 'administracion', 'Principal', 1),
(99, 4, 4, 'administracion/empresa', 'Datos Empresa', 1),
(2, 2, 2, 'rrhh/mantenedores_crud_masters', 'Maestros RRHH', 1),
(2, 4, 4, 'rrhh/revisar_horas_extras_pendientes', 'HHEE Rev Solicitud', 1),
(2, 5, 5, 'rrhh/revisarausencias', 'Registro Ausencias', 1),
(2, 6, 6, 'rrhh/cargar_turnos', 'Cargar Turnos', 1),
(2, 7, 7, 'rrhh/revisar_turnos', 'Ver Turno Plataforma', 1),
(2, 3, 3, 'rrhh/revisar_horas_extra', 'Solicitar HHEE', 1),
(1, 2, 2, 'confirmacion/mantenedores_crud_masters', 'Mantenedores', 1),
(2, 8, 8, 'rrhh/asignar_ejecutivo', 'Asigna Ejecutivo a Super', 1),
(1, 4, 4, 'confirmacion/listar_allorden', 'Listar ordenes', 1),
(1, 3, 3, 'confirmacion/listar_ordenes', 'Programacion', 1),
(6, 2, 2, 'coordinacion/asignar_comuna', 'Asigna Comuna Ejecutivo', 1),
(6, 3, 3, 'coordinacion/asignar_tecnico', 'Asigna Tecnico a Ejecutivo', 1),
(7, 3, 3, 'despacho/seguimiento', 'Seguimiento de Ordenes', 1),
(7, 2, 2, 'despacho/mantenedores_crud_masters', 'Mantenedores', 1),
(7, 4, 4, 'despacho/listar_ordenes', 'Cierre de Ordenes', 1),
(7, 5, 5, 'despacho/visor_supervisor', 'Visor de Ordenes Super', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltecnicos`
--

DROP TABLE IF EXISTS `tbltecnicos`;
CREATE TABLE `tbltecnicos` (
  `id_tecnicos` int(11) NOT NULL,
  `rut` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbltecnicos`
--

INSERT INTO `tbltecnicos` (`id_tecnicos`, `rut`, `nombre`, `codigo`, `telefono`, `estado`) VALUES
(1, '158899051', 'Tecnico 1', 'TEC1', '1', '1'),
(6, '5', 'Tecnico 2', 'TEC2', '2', '1'),
(3, '2', 'Tecnico 3', 'TEC3', '', '1'),
(8, '7', 'Tecnico 4', 'TEC4', '', '1'),
(5, '4', 'Tecnico 5', 'TEC5', '', '1'),
(7, '6', 'Tecnico 6', 'TEC6', '', '1'),
(9, '8', 'Tecnico 7', 'TEC7', '', '1'),
(10, '89', 'Tecnico 8', 'TEC8', '', '1'),
(11, '1-9', 'Tecnico 9', 'TEC9', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipoorden`
--

DROP TABLE IF EXISTS `tbltipoorden`;
CREATE TABLE `tbltipoorden` (
  `id_tipoorden` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prioridad` int(11) NOT NULL DEFAULT '1',
  `estado` smallint(6) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbltipoorden`
--

INSERT INTO `tbltipoorden` (`id_tipoorden`, `descripcion`, `prioridad`, `estado`) VALUES
(1, 'DOMICILIARIA', 4, 1),
(2, 'B2B', 1, 1),
(3, 'SWAP', 3, 1),
(4, 'AVAR', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblturnos`
--

DROP TABLE IF EXISTS `tblturnos`;
CREATE TABLE `tblturnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `servicio` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `hora_ingreso` time NOT NULL,
  `hora_salida` time NOT NULL,
  `n_semana` int(11) DEFAULT '0',
  `hora_turnos` double DEFAULT '0',
  `horario_colacion` double DEFAULT '0',
  `hora_colacion` time NOT NULL,
  `break_1` time NOT NULL,
  `break_2` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblturnos`
--

INSERT INTO `tblturnos` (`id`, `rut`, `fecha`, `servicio`, `hora_ingreso`, `hora_salida`, `n_semana`, `hora_turnos`, `horario_colacion`, `hora_colacion`, `break_1`, `break_2`) VALUES
(811, '11603505', '2018-01-04', 'TORRE CONTROL', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(810, '25572474', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(809, '16346771', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(808, '17736774', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(807, '25657286', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(806, '13901026', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(805, '19004569', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(804, '25779414', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(803, '25833077', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(802, '17310756', '2018-01-04', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(801, '16393634', '2018-01-04', 'SWAP', '09:30:00', '19:30:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(800, '25753973', '2018-01-04', 'REDES', '10:00:00', '20:00:00', 1, 9, 60, '14:00:00', '11:30:00', '17:30:00'),
(799, '19063731', '2018-01-04', 'REDES', '12:00:00', '22:00:00', 1, 9, 60, '15:00:00', '12:30:00', '18:30:00'),
(798, '15930005', '2018-01-04', 'REDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(797, '17793951', '2018-01-04', 'DESARROLLO', '09:00:00', '18:00:00', 1, 8, 60, '13:30:00', '11:00:00', '17:00:00'),
(796, '18050468', '2018-01-04', 'DESARROLLO', '09:00:00', '18:00:00', 1, 8, 60, '13:30:00', '11:00:00', '17:00:00'),
(795, '23590775', '2018-01-04', 'BLINDAJE N2', '10:00:00', '20:00:00', 1, 9, 60, '14:00:00', '11:30:00', '17:30:00'),
(794, '17412388', '2018-01-04', 'BLINDAJE N2', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(793, '12182659', '2018-01-04', 'BLINDAJE N2', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(792, '18533419', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(791, '13057080', '2018-01-04', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(790, '18017745', '2018-01-04', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(789, '16717002', '2018-01-04', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(788, '18904277', '2018-01-04', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(787, '11871554', '2018-01-04', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(786, '17425021', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(785, '12235760', '2018-01-04', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(784, '18916055', '2018-01-04', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(783, '17071589', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(782, '14160915', '2018-01-04', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(781, '17622541', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(780, '14001975', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(779, '18245181', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(778, '13036638', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(777, '16915549', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(776, '24258741', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(775, '12907155', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(774, '17771634', '2018-01-04', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(773, '17779311', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(772, '10503173', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(771, '16280891', '2018-01-04', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(386, '16280891', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(387, '10503173', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(388, '17779311', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(389, '17771634', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(390, '12907155', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(391, '24258741', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(392, '16915549', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(393, '13036638', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(394, '18245181', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(395, '14001975', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(396, '17622541', '2018-01-03', 'BLINDAJE', '13:00:00', '17:30:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(397, '14160915', '2018-01-03', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(398, '17071589', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(399, '18916055', '2018-01-03', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(400, '12235760', '2018-01-03', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(401, '17425021', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(402, '11871554', '2018-01-03', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(403, '18904277', '2018-01-03', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(404, '16717002', '2018-01-03', 'BLINDAJE', '17:30:00', '22:00:00', 1, 3, 60, '00:00:00', '00:00:00', '00:00:00'),
(405, '18017745', '2018-01-03', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(406, '13057080', '2018-01-03', 'BLINDAJE', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(407, '18533419', '2018-01-03', 'BLINDAJE', '08:30:00', '13:00:00', 1, 3, 60, '13:00:00', '10:30:00', '16:30:00'),
(408, '12182659', '2018-01-03', 'BLINDAJE N2', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(409, '17412388', '2018-01-03', 'BLINDAJE N2', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(410, '23590775', '2018-01-03', 'BLINDAJE N2', '10:00:00', '20:00:00', 1, 9, 60, '14:00:00', '11:30:00', '17:30:00'),
(411, '18050468', '2018-01-03', 'DESARROLLO', '09:00:00', '18:00:00', 1, 8, 60, '13:30:00', '11:00:00', '17:00:00'),
(412, '17793951', '2018-01-03', 'DESARROLLO', '09:00:00', '18:00:00', 1, 8, 60, '13:30:00', '11:00:00', '17:00:00'),
(413, '15930005', '2018-01-03', 'REDES', '00:00:00', '00:00:00', 1, 0, 0, '00:00:00', '00:00:00', '00:00:00'),
(414, '19063731', '2018-01-03', 'REDES', '12:00:00', '22:00:00', 1, 9, 60, '15:00:00', '12:30:00', '18:30:00'),
(415, '25753973', '2018-01-03', 'REDES', '10:00:00', '20:00:00', 1, 9, 60, '14:00:00', '11:30:00', '17:30:00'),
(416, '16393634', '2018-01-03', 'SWAP', '09:30:00', '19:30:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(417, '17310756', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(418, '25833077', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(419, '25779414', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(420, '19004569', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(421, '13901026', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(422, '25657286', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(423, '17736774', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(424, '16346771', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(425, '25572474', '2018-01-03', 'TEAM ANDES', '08:30:00', '18:30:00', 1, 9, 60, '13:00:00', '10:30:00', '16:30:00'),
(426, '11603505', '2018-01-03', 'TORRE CONTROL', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(427, '18357690', '2018-01-03', 'TORRE CONTROL', '09:00:00', '17:30:00', 1, 7, 60, '13:30:00', '11:00:00', '17:00:00'),
(428, '18910997', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(429, '16486383', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(430, '17988145', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(431, '25637138', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(432, '17312370', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(433, '15418456', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(434, '13903234', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(435, '11415959', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(436, '17664997', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(437, '20220124', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(438, '12624268', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(439, '16691974', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(440, '17010897', '2018-01-03', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(812, '18357690', '2018-01-04', 'TORRE CONTROL', '09:00:00', '17:30:00', 1, 7, 60, '13:30:00', '11:00:00', '17:00:00'),
(813, '18910997', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(814, '16486383', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(815, '17988145', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(816, '25637138', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(817, '17312370', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(818, '15418456', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(819, '13903234', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(820, '11415959', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(821, '17664997', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(822, '20220124', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(823, '12624268', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(824, '16691974', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00'),
(825, '17010897', '2018-01-04', 'TORRE ESCALAMIENTOS', '09:00:00', '19:00:00', 1, 9, 60, '13:30:00', '11:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cierre_asegurado`
--

DROP TABLE IF EXISTS `tbl_cierre_asegurado`;
CREATE TABLE `tbl_cierre_asegurado` (
  `id_cierre` int(11) NOT NULL,
  `n_orden` int(11) NOT NULL,
  `hay_tec` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cierre` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comuna_tecnico`
--

DROP TABLE IF EXISTS `tbl_comuna_tecnico`;
CREATE TABLE `tbl_comuna_tecnico` (
  `id` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `comuna` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_comuna_tecnico`
--

INSERT INTO `tbl_comuna_tecnico` (`id`, `id_tecnico`, `comuna`) VALUES
(1, 1, 'INDE'),
(2, 5, 'CERR'),
(3, 8, 'LAMP'),
(4, 11, 'MAIP'),
(5, 7, 'CNCH'),
(6, 10, 'LAMP'),
(7, 9, 'HUEC'),
(8, 6, 'INDE'),
(9, 3, 'INDE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_coordinacion_despacho_tecnico`
--

DROP TABLE IF EXISTS `tbl_coordinacion_despacho_tecnico`;
CREATE TABLE `tbl_coordinacion_despacho_tecnico` (
  `id_super` int(11) NOT NULL,
  `id_despacho` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_coordinacion_despacho_tecnico`
--

INSERT INTO `tbl_coordinacion_despacho_tecnico` (`id_super`, `id_despacho`, `id_tecnico`) VALUES
(32, 28, 1),
(27, 28, 10),
(24, 28, 5),
(33, 28, 6),
(25, 28, 7),
(34, 28, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_coordinacion_ejecutivo_comuna`
--

DROP TABLE IF EXISTS `tbl_coordinacion_ejecutivo_comuna`;
CREATE TABLE `tbl_coordinacion_ejecutivo_comuna` (
  `id_asignacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comuna` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_coordinacion_ejecutivo_comuna`
--

INSERT INTO `tbl_coordinacion_ejecutivo_comuna` (`id_asignacion`, `id_usuario`, `comuna`, `estado`) VALUES
(113, 28, 'INDE', 1),
(114, 16, 'MAIP', 1),
(112, 28, 'RENC', 1),
(111, 21, 'HUEC', 1),
(110, 21, 'CNCH', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_det_hora_extra`
--

DROP TABLE IF EXISTS `tbl_det_hora_extra`;
CREATE TABLE `tbl_det_hora_extra` (
  `id_det` int(11) NOT NULL,
  `id_enc_hx` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_enc_hora_extra`
--

DROP TABLE IF EXISTS `tbl_enc_hora_extra`;
CREATE TABLE `tbl_enc_hora_extra` (
  `id_enc_hx` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `id_user` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `motivo_solicitud` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` time NOT NULL,
  `hora_hasta` time NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `motivo_respuesta` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Sin responder'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_orden`
--

DROP TABLE IF EXISTS `tbl_estado_orden`;
CREATE TABLE `tbl_estado_orden` (
  `id_estado` int(11) NOT NULL,
  `ubicacion` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `grupo` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_estado_orden`
--

INSERT INTO `tbl_estado_orden` (`id_estado`, `ubicacion`, `descripcion`, `estado`, `grupo`) VALUES
(1, 'DESPACHO', 'PENDIENTE', 1, 'Pendiente'),
(2, 'DESPACHO', 'ASIGNADA', 1, 'En Proceso'),
(3, 'DESPACHO', 'EN CAMINO', 1, ''),
(4, 'OTROS', 'SIN MORADORES', 1, ''),
(5, 'REDES', 'NIVELES FUERA DE RANGO', 1, ''),
(6, 'OTROS', 'SIN MATERIAL', 1, ''),
(7, 'DESPACHO', 'EJECUTANDO', 1, ''),
(8, 'DESPACHO', 'POR FINALIZAR', 1, ''),
(9, 'DESPACHO', 'PEndiente redes', 1, ''),
(10, 'DESPACHO', 'Problema Aprovisionamiento', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historialarchivoscargados`
--

DROP TABLE IF EXISTS `tbl_historialarchivoscargados`;
CREATE TABLE `tbl_historialarchivoscargados` (
  `id` double NOT NULL,
  `app` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre_archivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_historialarchivoscargados`
--

INSERT INTO `tbl_historialarchivoscargados` (`id`, `app`, `fecha_hora`, `nombre_archivo`) VALUES
(1, 'Carga de Turnos', '2018-01-04 13:24:35', 'turnos_plataforma (1).xlsx'),
(2, 'Carga de Turnos', '2018-01-04 13:27:12', 'turnos_plataforma (1).xlsx'),
(3, 'Carga de Turnos', '2018-01-04 13:28:49', 'turnos_plataforma (1).xlsx'),
(4, 'Carga de Turnos', '2018-01-04 13:30:21', 'turnos_plataforma (1).xlsx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horasextra`
--

DROP TABLE IF EXISTS `tbl_horasextra`;
CREATE TABLE `tbl_horasextra` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `rut` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `solicitante` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `id_user` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_horasextra`
--

INSERT INTO `tbl_horasextra` (`id`, `fecha`, `rut`, `hora_desde`, `hora_hasta`, `solicitante`, `motivo`, `estatus`, `id_user`) VALUES
(6, '2017-11-07', '15889905', '17:11', '17:11', 'Jorge Jara Hinojosa', 'jorejagahasgjd', 'Rechazada', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tecnico_comuna`
--

DROP TABLE IF EXISTS `tbl_tecnico_comuna`;
CREATE TABLE `tbl_tecnico_comuna` (
  `id` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  `comuna` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_horasextra`
--

DROP TABLE IF EXISTS `tmp_horasextra`;
CREATE TABLE `tmp_horasextra` (
  `id` int(11) NOT NULL,
  `id_user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tmp_horasextra`
--

INSERT INTO `tmp_horasextra` (`id`, `id_user`, `fecha_solicitud`, `rut`, `hora_desde`, `hora_hasta`, `motivo`) VALUES
(1, '2', '0000-00-00', '15889905', '', '', ''),
(2, '2', '0000-00-00', '19063731', '', '', ''),
(3, '2', '0000-00-00', '25753973', '', '', ''),
(4, '2', '0000-00-00', '18050468', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tmp_pass` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` smallint(1) NOT NULL DEFAULT '0',
  `rut_personal` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `estado` smallint(1) NOT NULL DEFAULT '1',
  `foto` smallint(1) NOT NULL DEFAULT '0',
  `name_foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pagina_inicio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `online_fecha` int(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `fono`, `cargo`, `pass`, `tmp_pass`, `token`, `perfil`, `rol`, `rut_personal`, `estado`, `foto`, `name_foto`, `pagina_inicio`, `online_fecha`) VALUES
(1, 'ADMINISTRADOR DE SISTEMA', 'admin@wys.cl', '+56 555CORRIENTEE', 'ADMINISTRADOR SISTEMA', '$2a$10$17eba86939941dddd3881Ojbn9/Hks7L317Uhb6XiwWH02Nbwdv0S', '', '', 'DEFINIDO', 1, '158899051', 1, 1, '1.jpg', 'confirmacion', 0),
(2, 'JORGE JARA', 'jjara@wys.cl', '930248408', 'SUPERVISOR HD', '$2a$10$5ec3ac04d2a440d0c7c93uDB8QZcRjAObC/Osb55P1Z/4TbSkxdBm', '', '', 'DEFINIDO', 0, '15889905', 1, 1, '2.jpg', 'portal', 0),
(14, 'PATRICIO BRAVO SILVA', 'patricio.bravo@nielsen.cl', '964217456', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '15698986', 1, 0, '', 'plataforma', 0),
(15, 'DANIELA COVARRUBIAS NAVARRETE', 'daniela.covarrubias@nielsen.cl', '964526245', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '10371223', 1, 0, '', 'plataforma', 0),
(16, 'CARLOS GONZALEZ PEÃ‘A', 'carlos.gonzalez@nielsen.cl', '964527575', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'DESPACHO_SUPERVISOR', 0, '16939194', 1, 0, '', 'portal', 0),
(17, 'JOHN REYES DIAZ', 'john.reyes@nielsen.cl', '0', 'JEFE HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '13651904', 1, 0, '', 'plataforma', 0),
(18, 'JONATHAN ACEITON  UGAS', 'jonathan.aceiton@nielsen.cl', '930737112', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13894211', 1, 0, '', 'plataforma', 0),
(19, 'FELIPE ANDRADE VALENZUELA', 'felipe.andrade@nielsen.cl', '986606669', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '18050468', 1, 0, '', 'plataforma', 0),
(20, 'MARIO ARIAS BERNAL', 'mario.arias@nielsen.cl', '982251110', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17370343', 1, 0, '', 'plataforma', 0),
(21, 'ALEXANDER BERRIOS  GARRIDO', 'alexander.berrios@nielsen.cl', '951380234', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'DESPACHO_EJECUTIVO', 0, '16005554', 1, 0, '', 'portal', 0),
(28, 'ALEJANDRO BIZAMA ASENJO', 'alejandro.bizama@nielsen.cl', '999734253', 'Ejecutivo HD', '$2a$10$f254dfda4649f6b294ff9u.UdXyN8fpQFHNyYQafKUGUQ1qFmOv3q', '', '', 'DESPACHO_EJECUTIVO', 0, '17310756', 1, 0, '', 'portal', 1519647920),
(30, 'EMERSON BRICEÃ‘O VEGA', 'emerson.briceno@nielsen.cl', '972889386', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25657286', 1, 0, '', 'plataforma', 0),
(31, 'BRAYAN COLINA DUARTE', 'brayan.colina@nielsen.cl', '957162561', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '12608918', 1, 0, '', 'plataforma', 0),
(33, 'REYNALDO DAVIS FONSECA', 'reynaldo.davis@nielsen.cl', '946903365', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25572474', 1, 0, '', 'plataforma', 0),
(35, 'CAMILA DIAZ RIQUELME', 'camila.diaz@nielsen.cl', '998134250', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '19004569', 1, 0, '', 'plataforma', 0),
(38, 'PABLO FIERRO OLEA', 'pablo.fierro@nielsen.cl', '982426242', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '16346771', 1, 0, '', 'plataforma', 0),
(40, 'ISMAEL GONZALEZ ENCALADA', 'ismael.gonzalez@nielsen.cl', '990124536', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '16640409', 1, 0, '', 'plataforma', 0),
(41, 'HECTOR GUTIERREZ SANCHEZ', 'hector.gutierrez@nielsen.cl', '985040211', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17793951', 1, 0, '', 'plataforma', 0),
(42, 'CLAUDIO INOSTROZA GODOY', 'claudio.inostroza@nielsen.cl', '962143829', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '12182659', 1, 0, '', 'plataforma', 0),
(43, 'ARTURO IZQUIERDO GOITIA', 'arturo.izquierdo@nielsen.cl', '990196330', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '12896837', 1, 0, '', 'plataforma', 0),
(47, 'CRISTIAN OLIVARES FUENTES', 'cristian.olivares@nielsen.cl', '951383875', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13901026', 1, 0, '', 'plataforma', 0),
(48, 'MARIA PEREZ VASQUEZ', 'maria.perez@nielsen.cl', '973154746', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25853610', 1, 0, '', 'plataforma', 0),
(49, 'JEREMIAS RAMIREZ QUEZADA', 'jeremias.ramirez@nielsen.cl', '977903377', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17736774', 1, 0, '', 'plataforma', 0),
(51, 'LUIS RODRIGUEZ MARTINEZ', 'luis.rodriguez@nielsen.cl', '996923115', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '11637661', 1, 0, '', 'plataforma', 0),
(52, 'MAXIMILIANO SALAMANCA RIQUELME', 'maximiliano.salamanca@nielsen.cl', '984895419', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '16393634', 1, 0, '', 'plataforma', 0),
(53, 'LAUTARO SALINAS ALVEAR', 'lautaro.salinas@nielsen.cl', '950055870', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13903234', 1, 0, '', 'plataforma', 0),
(54, 'RUBEN SANLLEHI SOTO', 'ruben.sanllehi@nielsen.cl', '956849534', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '12624268', 1, 0, '', 'plataforma', 0),
(55, 'RICARDO SOTO FERRER', 'ricardo.soto@nielsen.cl', '962883054', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25753973', 1, 0, '', 'plataforma', 0),
(56, 'GUSTAVO VALERIA MEDEZ', 'gustavo.valeria@nielsen.cl', '996443920', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17412388', 1, 0, '', 'plataforma', 0),
(57, 'JONATHAN VALLE GOMEZ', 'jonathan.valle@nielsen.cl', '987284586', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '19063731', 1, 0, '', 'plataforma', 0),
(60, 'VANLLELO VERDUGO NAVARRO', 'vanllelo.verdugo@nielsen.cl', '985058920', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '18357690', 1, 0, '', 'plataforma', 0),
(62, 'RODOLFO ANDRES URIBE MARDONEZ', 'rodolfo.uribe@nielsen.cl', '975967883', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '23590775', 1, 0, '', 'plataforma', 0),
(63, 'SIMON ARAVENA MULLER', 'simon.aravena@nielsen.cl', '987716630', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '16691974', 1, 0, '', 'plataforma', 0),
(64, 'NICOLAS JARA VASQUEZ', 'nicolas.jara@nielsen.cl', '984458359', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17664997', 1, 0, '', 'plataforma', 0),
(65, 'HENKY MENDOZA PEEL', 'henky.mendoza@nielsen.cl', '957547833', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25939970', 0, 0, '', 'plataforma', 0),
(66, 'CESAR ZUÃ‘IGA RAMIREZ', 'cesar.zuniga@nielsen.cl', '963430575', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '15930005', 1, 0, '', 'plataforma', 0),
(67, 'GELEN EUDELIS MONTILLA RAMOS', 'gelen.montilla@nielsen.cl', '959820181', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25637138', 1, 0, '', 'plataforma', 0),
(68, 'GERSON ARIEL SALGADO AREVALO', 'gerson.salagado@nielsen.cl', '987511767', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17312370', 1, 0, '', 'plataforma', 0),
(69, 'YADIRA JOSE BERMUDEZ LOPEZ', 'yadira.bermudez@nielsen.cl', '988140248', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25940058', 1, 0, '', 'plataforma', 0),
(70, 'HECTOR FIGUIEROA CARRASCO', 'herctor.figueroa@nielsen.cl', '981295014', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13305778', 0, 0, '', 'plataforma', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tblactividad`
--
ALTER TABLE `tblactividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `tblasistenciatecnico`
--
ALTER TABLE `tblasistenciatecnico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD PRIMARY KEY (`id_tblausencias`);

--
-- Indices de la tabla `tblbloque`
--
ALTER TABLE `tblbloque`
  ADD PRIMARY KEY (`id_bloque`);

--
-- Indices de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tblcomuna`
--
ALTER TABLE `tblcomuna`
  ADD PRIMARY KEY (`id_comuna`);

--
-- Indices de la tabla `tblcuadrante`
--
ALTER TABLE `tblcuadrante`
  ADD PRIMARY KEY (`id_cuadrante`);

--
-- Indices de la tabla `tblhistorico`
--
ALTER TABLE `tblhistorico`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indices de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `tblmotivollamado`
--
ALTER TABLE `tblmotivollamado`
  ADD PRIMARY KEY (`id_motivo`);

--
-- Indices de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblperfilesuser`
--
ALTER TABLE `tblperfilesuser`
  ADD PRIMARY KEY (`id_user`,`id_menu`,`id_submenu`,`id`) USING BTREE;

--
-- Indices de la tabla `tblpersonal`
--
ALTER TABLE `tblpersonal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `tblresultado`
--
ALTER TABLE `tblresultado`
  ADD PRIMARY KEY (`id_resultado`);

--
-- Indices de la tabla `tblsubmenu`
--
ALTER TABLE `tblsubmenu`
  ADD PRIMARY KEY (`id_menu`,`id_submenu`) USING BTREE;

--
-- Indices de la tabla `tbltecnicos`
--
ALTER TABLE `tbltecnicos`
  ADD PRIMARY KEY (`id_tecnicos`);

--
-- Indices de la tabla `tbltipoorden`
--
ALTER TABLE `tbltipoorden`
  ADD PRIMARY KEY (`id_tipoorden`);

--
-- Indices de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_2` (`rut`,`fecha`);

--
-- Indices de la tabla `tbl_cierre_asegurado`
--
ALTER TABLE `tbl_cierre_asegurado`
  ADD PRIMARY KEY (`id_cierre`),
  ADD UNIQUE KEY `n_orden` (`n_orden`);

--
-- Indices de la tabla `tbl_comuna_tecnico`
--
ALTER TABLE `tbl_comuna_tecnico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_coordinacion_despacho_tecnico`
--
ALTER TABLE `tbl_coordinacion_despacho_tecnico`
  ADD PRIMARY KEY (`id_super`);

--
-- Indices de la tabla `tbl_coordinacion_ejecutivo_comuna`
--
ALTER TABLE `tbl_coordinacion_ejecutivo_comuna`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `tbl_estado_orden`
--
ALTER TABLE `tbl_estado_orden`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_horasextra`
--
ALTER TABLE `tbl_horasextra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tecnico_comuna`
--
ALTER TABLE `tbl_tecnico_comuna`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tmp_horasextra`
--
ALTER TABLE `tmp_horasextra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tblactividad`
--
ALTER TABLE `tblactividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tblasistenciatecnico`
--
ALTER TABLE `tblasistenciatecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  MODIFY `id_tblausencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tblbloque`
--
ALTER TABLE `tblbloque`
  MODIFY `id_bloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tblcomuna`
--
ALTER TABLE `tblcomuna`
  MODIFY `id_comuna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tblcuadrante`
--
ALTER TABLE `tblcuadrante`
  MODIFY `id_cuadrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tblhistorico`
--
ALTER TABLE `tblhistorico`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT de la tabla `tblmotivollamado`
--
ALTER TABLE `tblmotivollamado`
  MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT de la tabla `tblperfilesuser`
--
ALTER TABLE `tblperfilesuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tblpersonal`
--
ALTER TABLE `tblpersonal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT de la tabla `tblresultado`
--
ALTER TABLE `tblresultado`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tblsubmenu`
--
ALTER TABLE `tblsubmenu`
  MODIFY `id_submenu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbltecnicos`
--
ALTER TABLE `tbltecnicos`
  MODIFY `id_tecnicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbltipoorden`
--
ALTER TABLE `tbltipoorden`
  MODIFY `id_tipoorden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=826;
--
-- AUTO_INCREMENT de la tabla `tbl_cierre_asegurado`
--
ALTER TABLE `tbl_cierre_asegurado`
  MODIFY `id_cierre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbl_comuna_tecnico`
--
ALTER TABLE `tbl_comuna_tecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_coordinacion_despacho_tecnico`
--
ALTER TABLE `tbl_coordinacion_despacho_tecnico`
  MODIFY `id_super` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT de la tabla `tbl_coordinacion_ejecutivo_comuna`
--
ALTER TABLE `tbl_coordinacion_ejecutivo_comuna`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT de la tabla `tbl_estado_orden`
--
ALTER TABLE `tbl_estado_orden`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_horasextra`
--
ALTER TABLE `tbl_horasextra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_tecnico_comuna`
--
ALTER TABLE `tbl_tecnico_comuna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tmp_horasextra`
--
ALTER TABLE `tmp_horasextra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
