-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2018 a las 16:13:00
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

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
-- Truncar tablas antes de insertar `empresa`
--

TRUNCATE TABLE `empresa`;
--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `telefono`, `email`, `impuesto`, `tipo_moneda`, `direccion`, `ciudad`, `comuna`, `region`, `ext_logo`) VALUES
(1, 'CABLE NIELSEN LTDA', '+56 9', 'contacto@nielsen.cl', 19, '$', 'Piloto Lazo 90', 'Santiago', 'Cerrillos', 'Metropolitana', 'png');

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
-- Truncar tablas antes de insertar `tblareas`
--

TRUNCATE TABLE `tblareas`;
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
-- Truncar tablas antes de insertar `tblausencias`
--

TRUNCATE TABLE `tblausencias`;
--
-- Volcado de datos para la tabla `tblausencias`
--

INSERT INTO `tblausencias` (`id_tblausencias`, `rut`, `tipo_ausencia`, `observacion`, `desde`, `hasta`, `usu_registra`, `fechamod`, `id_area`) VALUES
(7, '25939970', 'Con Licencia', '2132132 observacion\r\nprueba\r\nde ingreso', '2017-11-22', '2017-11-22', '2', '2017-11-22', 1),
(2, '19063731', 'Con Licencia', 'f', '2017-11-21', '2017-11-21', '16', '2017-11-21', 1),
(8, '25637138', 'Con Licencia', 'test', '2018-01-03', '2018-01-04', '2', '2018-01-04', 1);

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
-- Truncar tablas antes de insertar `tblcargos`
--

TRUNCATE TABLE `tblcargos`;
--
-- Volcado de datos para la tabla `tblcargos`
--

INSERT INTO `tblcargos` (`id_cargo`, `descripcion`) VALUES
(1, 'Supervisor HD'),
(2, 'Ejecutivo HD'),
(3, 'Jefe HD');

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
-- Truncar tablas antes de insertar `tblmenu`
--

TRUNCATE TABLE `tblmenu`;
--
-- Volcado de datos para la tabla `tblmenu`
--

INSERT INTO `tblmenu` (`id_menu`, `PosI`, `descripcion`, `glyphicon`) VALUES
(1, 1, 'CONFIRMACION', 'fa-headphones'),
(99, 99, 'ADMINISTRACIÓN', 'fa-user'),
(2, 2, 'RR HH', 'fa-users'),
(4, 4, 'OPERACIONES', 'fa-tachometer'),
(3, 3, 'REDES', 'fa-sitemap'),
(5, 5, 'PREVENCION', 'fa-fire-extinguisher'),
(6, 6, 'TEST', 'fa-tachometer');

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
-- Truncar tablas antes de insertar `tblperfiles`
--

TRUNCATE TABLE `tblperfiles`;
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
(109, 'CLIENTES', 1, 1),
(118, 'HD_SUPERVISOR', 5, 1);

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
-- Truncar tablas antes de insertar `tblperfilesuser`
--

TRUNCATE TABLE `tblperfilesuser`;
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
(1, '16', 1, 1),
(1, '16', 2, 1),
(1, '16', 2, 2),
(1, '16', 2, 3),
(1, '16', 2, 4),
(1, '16', 2, 5),
(1, '16', 3, 1),
(1, '16', 4, 1),
(1, '16', 5, 1),
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
(1, '2', 2, 1),
(1, '2', 2, 2),
(1, '2', 2, 3),
(1, '2', 2, 4),
(1, '2', 2, 5),
(1, '2', 3, 1),
(1, '2', 4, 1),
(1, '2', 5, 1),
(1, '2', 99, 2),
(1, '20', 1, 1),
(1, '21', 1, 1),
(1, '28', 1, 1),
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
-- Truncar tablas antes de insertar `tblpersonal`
--

TRUNCATE TABLE `tblpersonal`;
--
-- Volcado de datos para la tabla `tblpersonal`
--

INSERT INTO `tblpersonal` (`id_personal`, `rut`, `nombres`, `f_nacimiento`, `fono`, `id_cargo`, `id_area`, `id_user`, `estado`, `id_super`) VALUES
(112, '25939970', 'HENKY MENDOZA PEEL', '1978-05-08', '957547833', 2, 1, 0, 1, 0),
(111, '15930005', 'CESAR ZÃºÃ±IGA RAMÃ­REZ', '1986-01-30', '963430575', 2, 1, 0, 1, 0),
(110, '10371223', 'DANIELA PIA CUVARRUBIAS NAVARRETE', '1979-11-01', '964526245', 1, 1, 0, 1, 0),
(109, '16939194', 'CARLOS ANTONIO GONZALEZ PEÃ‘A', '1988-08-31', '964527575', 1, 1, 0, 1, 0),
(108, '15698986', 'PATRICIO ALFONSO BRAVO SILVA', '1984-05-17', '964217456', 1, 2, 0, 1, 0),
(107, '15889905', 'JORGE ANTONIO JARA  HINOJOSA', '1984-04-02', '930248408', 1, 1, 0, 1, 0),
(106, '16005554', 'ALEXANDER JULIAN BERRIOS GARRIDO', '1984-11-28', '951380234', 2, 1, 0, 1, 0),
(105, '13305778', 'HECTOR PATRICIO FIGUEROA CARRASCO', '1976-12-15', '981295014', 2, 1, 0, 1, 0),
(104, '25637138', 'GELEN EUDELIS MONTILLA RAMOS', '1983-06-01', '959820181', 2, 1, 0, 1, 0),
(103, '25940058', 'YADIRA JOSE BERMUDEZ LOPEZ', '1979-03-26', '988140248', 2, 1, 0, 1, 0),
(102, '17312370', 'GERSON ARIEL SALGADO AREVALO', '1988-07-10', '987511767', 2, 1, 0, 1, 0),
(101, '18357690', 'VANLLELO ADMILIAN VERDUGO  NAVARRO', '1993-01-26', '985058920', 2, 1, 0, 1, 0),
(100, '19063731', 'JONATHAN FELIPE VALLE  GOMEZ', '1995-07-28', '987284586', 2, 1, 0, 1, 0),
(99, '17412388', 'GUSTAVO JAVIER VALERIA  MEDEZ', '1989-08-29', '996443920', 2, 1, 0, 1, 0),
(98, '23590775', 'RODOLFO ANDRES URIBE MARDONES', '1981-11-15', '975967883', 2, 1, 0, 1, 0),
(97, '25753973', 'RICARDO JOSE SOTO FERRER', '1989-05-05', '962883054', 2, 1, 0, 1, 0),
(96, '12624268', 'RUBEN SANLLEHI SOTO', '1974-03-08', '956849534', 2, 1, 0, 1, 0),
(95, '13903234', 'LAUTARO NELSON SALINAS  ALVEAR', '1979-12-31', '950055870', 2, 1, 0, 1, 0),
(94, '16393634', 'MAXIMILIANO ARMANDO SALAMANCA  RIQUELME', '1986-12-29', '984895419', 2, 1, 0, 1, 0),
(93, '11637661', 'LUIS HERNAN RODRIGUEZ  MARTINEZ', '1970-02-07', '996923115', 2, 1, 0, 1, 0),
(92, '17736774', 'JEREMIAS ISAAC RAMIREZ  QUEZADA', '1989-04-03', '977903377', 2, 1, 0, 1, 0),
(91, '25853610', 'MARIA JOSE PEREZ  VASQUEZ', '1991-12-11', '11603505', 2, 1, 0, 1, 0),
(90, '13901026', 'CRISTIAN RAUL OLIVARES  FUENTES', '1980-11-24', '951383875', 2, 1, 0, 1, 0),
(89, '17664997', 'NICOLAS FIDEL JARA  VASQUEZ', '1991-01-22', '984458359', 2, 1, 0, 1, 0),
(88, '12896837', 'ARTURO MANASES IZQUIERDO  GOITIA', '1992-12-10', '990196330', 2, 1, 0, 1, 0),
(87, '12182659', 'CLAUDIO ANDRES INOSTROZA GODOY', '1972-10-23', '962143829', 2, 1, 0, 1, 0),
(86, '17793951', 'HECTOR PATRICIO GUTIERREZ  SANCHEZ', '1991-03-22', '985040211', 2, 1, 0, 1, 0),
(85, '16640409', 'ISMAEL IVANOFF GONZALEZ  ENCALADA', '1987-03-06', '990124536', 2, 1, 0, 1, 0),
(84, '16346771', 'PABLO ALFREDO FIERRO  OLEA', '1986-12-11', '982426242', 2, 1, 0, 1, 0),
(83, '19004569', 'CAMILA ALEJANDRA DIAZ RIQUELME', '1995-03-24', '998134250', 2, 1, 0, 1, 0),
(82, '25572474', 'REYNALDO ANDRES DAVIS  FONSECA', '1987-01-14', '946903365', 2, 1, 0, 1, 0),
(81, '12608918', 'BRAYAN LEVI COLINA  DUARTE', '1992-06-06', '957162561', 2, 1, 0, 1, 0),
(80, '25657286', 'EMERSON HELI BRICEÃ‘O  VEGA', '1979-12-20', '972889386', 2, 1, 0, 1, 0),
(79, '17310756', 'ALEJANDRO ARTURO BIZAMA  ASENJO', '7989-09-28', '999734253', 2, 1, 0, 1, 0),
(78, '17370343', 'MARIO EDUARDO ARIAS BERNAL', '1990-04-22', '982251110', 2, 1, 0, 1, 0),
(77, '16691974', 'SIMON CRISTIAN ARAVENA MULLER', '1987-05-21', '987716630', 2, 1, 0, 1, 0),
(76, '18050468', 'FELIPE ANDRES ANDRADE VALENZUELA', '1991-11-26', '986606669', 2, 1, 0, 1, 0),
(75, '13894211', 'JONATHAN LUIS ACEITON  UGAS', '1980-04-26', '930737112', 2, 1, 0, 1, 0);

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
-- Truncar tablas antes de insertar `tblsubmenu`
--

TRUNCATE TABLE `tblsubmenu`;
--
-- Volcado de datos para la tabla `tblsubmenu`
--

INSERT INTO `tblsubmenu` (`id_menu`, `id_submenu`, `PosS`, `url`, `descripcion`, `estado`) VALUES
(99, 2, 2, 'administracion/usuario', 'Usuarios', 1),
(99, 3, 3, 'administracion/perfiles', 'Perfiles', 1),
(2, 1, 1, 'rrhh', 'Principal', 1),
(1, 1, 1, 'confirmacion', 'Principal', 1),
(3, 1, 1, 'redes', 'Principal', 1),
(5, 1, 1, 'prevencion', 'Principal', 1),
(4, 1, 1, 'operaciones', 'Principal', 1),
(99, 1, 1, 'administracion', 'Principal', 1),
(99, 4, 4, 'administracion/empresa', 'Datos Empresa', 1),
(2, 2, 2, 'rrhh/mantenedores_crud_masters', 'Maestros RRHH', 1),
(2, 4, 4, 'rrhh/revisar_horas_extras_pendientes', 'HHEE Rev Solicitud', 1),
(2, 5, 5, 'rrhh/revisarausencias', 'Registro Ausencias', 1),
(2, 6, 6, 'rrhh/cargar_turnos', 'Cargar Turnos', 1),
(2, 7, 7, 'rrhh/revisar_turnos', 'Ver Turno Plataforma', 1),
(2, 3, 3, 'rrhh/revisar_horas_extra', 'HHEE Registrar', 1);

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
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tbltecnicos`
--

TRUNCATE TABLE `tbltecnicos`;
--
-- Volcado de datos para la tabla `tbltecnicos`
--

INSERT INTO `tbltecnicos` (`id_tecnicos`, `rut`, `nombre`, `codigo`, `estado`) VALUES
(1, '158899051', 'jorge jara', 'jjhjj1', '1'),
(6, '5', 'p', 'a', '1'),
(3, '2', 'e', 'd', '1'),
(8, '7', 'a', 'e', '1'),
(5, '4', 'i', 'v', '1'),
(7, '6', 'e', 'l', '1'),
(9, '8', 'n', 'n', '1'),
(10, '89', 'd', 'z', '1');

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
-- Truncar tablas antes de insertar `tblturnos`
--

TRUNCATE TABLE `tblturnos`;
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
-- Estructura de tabla para la tabla `tbl_det_hora_extra`
--

DROP TABLE IF EXISTS `tbl_det_hora_extra`;
CREATE TABLE `tbl_det_hora_extra` (
  `id_det` int(11) NOT NULL,
  `id_enc_hx` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tbl_det_hora_extra`
--

TRUNCATE TABLE `tbl_det_hora_extra`;
--
-- Volcado de datos para la tabla `tbl_det_hora_extra`
--

INSERT INTO `tbl_det_hora_extra` (`id_det`, `id_enc_hx`, `rut`) VALUES
(0, '1', '16005554');

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

--
-- Truncar tablas antes de insertar `tbl_enc_hora_extra`
--

TRUNCATE TABLE `tbl_enc_hora_extra`;
--
-- Volcado de datos para la tabla `tbl_enc_hora_extra`
--

INSERT INTO `tbl_enc_hora_extra` (`id_enc_hx`, `fecha_creacion`, `fecha_solicitud`, `id_user`, `motivo_solicitud`, `hora_desde`, `hora_hasta`, `estado`, `motivo_respuesta`) VALUES
('1', '2018-01-04', '2018-01-04', '2', 'test', '18:01:00', '18:01:00', 'Pendiente', 'Sin responder');

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
-- Truncar tablas antes de insertar `tbl_historialarchivoscargados`
--

TRUNCATE TABLE `tbl_historialarchivoscargados`;
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
-- Estructura de tabla para la tabla `tmp_horasextra`
--

DROP TABLE IF EXISTS `tmp_horasextra`;
CREATE TABLE `tmp_horasextra` (
  `id` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_enc_hx` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncar tablas antes de insertar `tmp_horasextra`
--

TRUNCATE TABLE `tmp_horasextra`;
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
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `fono`, `cargo`, `pass`, `tmp_pass`, `token`, `perfil`, `rol`, `rut_personal`, `estado`, `foto`, `name_foto`, `pagina_inicio`, `online_fecha`) VALUES
(1, 'ADMINISTRADOR DE SISTEMA', 'admin@wys.cl', '+56 555CORRIENTEE', 'ADMINISTRADOR SISTEMA', '$2a$10$17eba86939941dddd3881Ojbn9/Hks7L317Uhb6XiwWH02Nbwdv0S', '', '', 'DEFINIDO', 1, '158899051', 1, 1, '1.jpg', 'administracion', 0),
(2, 'JORGE JARA', 'jjara@wys.cl', '930248408', 'SUPERVISOR HD', '$2a$10$5ec3ac04d2a440d0c7c93uDB8QZcRjAObC/Osb55P1Z/4TbSkxdBm', '', '', 'DEFINIDO', 1, '15889905', 1, 1, '2.jpg', 'plataforma', 1515161468),
(14, 'PATRICIO BRAVO SILVA', 'patricio.bravo@nielsen.cl', '964217456', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '15698986', 1, 0, '', 'plataforma', 0),
(15, 'DANIELA COVARRUBIAS NAVARRETE', 'daniela.covarrubias@nielsen.cl', '964526245', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '10371223', 1, 0, '', 'plataforma', 0),
(16, 'CARLOS GONZALEZ PEÃ‘A', 'carlos.gonzalez@nielsen.cl', '964527575', 'SUPERVISOR HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '16939194', 1, 0, '', 'plataforma', 0),
(17, 'JOHN REYES DIAZ', 'john.reyes@nielsen.cl', '0', 'JEFE HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_SUPERVISOR', 0, '13651904', 1, 0, '', 'plataforma', 0),
(18, 'JONATHAN ACEITON  UGAS', 'jonathan.aceiton@nielsen.cl', '930737112', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13894211', 1, 0, '', 'plataforma', 0),
(19, 'FELIPE ANDRADE VALENZUELA', 'felipe.andrade@nielsen.cl', '986606669', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '18050468', 1, 0, '', 'plataforma', 0),
(20, 'MARIO ARIAS BERNAL', 'mario.arias@nielsen.cl', '982251110', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17370343', 1, 0, '', 'plataforma', 0),
(21, 'ALEXANDER BERRIOS  GARRIDO', 'alexander.berrios@nielsen.cl', '951380234', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '16005554', 1, 0, '', 'plataforma', 0),
(28, 'ALEJANDRO BIZAMA ASENJO', 'alejandro.bizama@nielsen.cl', '999734253', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17310756', 1, 0, '', 'plataforma', 0),
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
(65, 'HENKY MENDOZA PEEL', 'henky.mendoza@nielsen.cl', '957547833', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25939970', 1, 0, '', 'plataforma', 0),
(66, 'CESAR ZUÃ‘IGA RAMIREZ', 'cesar.zuniga@nielsen.cl', '963430575', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '15930005', 1, 0, '', 'plataforma', 0),
(67, 'GELEN EUDELIS MONTILLA RAMOS', 'gelen.montilla@nielsen.cl', '959820181', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25637138', 1, 0, '', 'plataforma', 0),
(68, 'GERSON ARIEL SALGADO AREVALO', 'gerson.salagado@nielsen.cl', '987511767', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '17312370', 1, 0, '', 'plataforma', 0),
(69, 'YADIRA JOSE BERMUDEZ LOPEZ', 'yadira.bermudez@nielsen.cl', '988140248', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '25940058', 1, 0, '', 'plataforma', 0),
(70, 'HECTOR FIGUIEROA CARRASCO', 'herctor.figueroa@nielsen.cl', '981295014', 'Ejecutivo HD', '$2a$10$6c8a7276f3a1677d27a6bejyZWuQ.n9wKLqkHHEE5GBBu7EiY3Bla', '', '', 'HD_USUARIO', 0, '13305778', 1, 0, '', 'plataforma', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD PRIMARY KEY (`id_tblausencias`);

--
-- Indices de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`id_menu`);

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
-- Indices de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_2` (`rut`,`fecha`);

--
-- Indices de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
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
-- AUTO_INCREMENT de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  MODIFY `id_tblausencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

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
-- AUTO_INCREMENT de la tabla `tblsubmenu`
--
ALTER TABLE `tblsubmenu`
  MODIFY `id_submenu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltecnicos`
--
ALTER TABLE `tbltecnicos`
  MODIFY `id_tecnicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=826;

--
-- AUTO_INCREMENT de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
