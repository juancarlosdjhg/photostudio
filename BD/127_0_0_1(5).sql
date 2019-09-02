-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2014 a las 19:29:50
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sindicato`
--
CREATE DATABASE IF NOT EXISTS `sindicato` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sindicato`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'CATEGORIA 1'),
(2, 'CATEGORIA 2'),
(3, 'CATEGORIA 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_contrato`
--

CREATE TABLE IF NOT EXISTS `condicion_contrato` (
`id_condicion_contrato` int(11) NOT NULL,
  `nombre_condicion_contrato` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `condicion_contrato`
--

INSERT INTO `condicion_contrato` (`id_condicion_contrato`, `nombre_condicion_contrato`) VALUES
(1, 'CONDICION 1'),
(2, 'CONDICION 2'),
(3, 'CONDICION 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dedicacion`
--

CREATE TABLE IF NOT EXISTS `dedicacion` (
`id_dedicacion` int(11) NOT NULL,
  `nombre_dedicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `dedicacion`
--

INSERT INTO `dedicacion` (`id_dedicacion`, `nombre_dedicacion`) VALUES
(1, 'DEDICACION 1'),
(2, 'DEDICACION 2'),
(3, 'DEDICACION 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
`id_empleado` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_condicion_contrato` int(11) DEFAULT NULL,
  `id_formacion` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_dedicacion` int(11) DEFAULT NULL,
  `id_lugar_labor` int(11) DEFAULT NULL,
  `id_vivienda` int(11) DEFAULT NULL,
  `direccion_habitacion` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `email`, `fecha_ingreso`, `estado_civil`, `telefono`, `id_persona`, `id_condicion_contrato`, `id_formacion`, `id_categoria`, `id_dedicacion`, `id_lugar_labor`, `id_vivienda`, `direccion_habitacion`) VALUES
(1, 'angelovasq@hotmail.com', '2004-01-02', 'SOLTERO(A).', '04140581393', 4, 3, 3, 3, 3, 3, 3, 'san antonio'),
(2, 'angelovasq2@hotmail.com', '2004-01-02', 'DIVORCIADO(A).', '12312312312', 5, 2, 3, 3, 3, 3, 3, 'asdasdasd'),
(3, 'rehreher@dfjdfj.2sd', '2004-01-02', 'SOLTERO(A).', '13252830728', 6, 1, 1, 1, 1, 1, 1, ''),
(4, 'rehreher@dfjdfj.2sd', '2004-01-02', 'DIVORCIADO(A).', '31231231231', 14, 2, 2, 2, 2, 2, 3, 'SASDCAZVVHHAAA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion_postgrado`
--

CREATE TABLE IF NOT EXISTS `formacion_postgrado` (
`id_formacion` int(11) NOT NULL,
  `nombre_formacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `formacion_postgrado`
--

INSERT INTO `formacion_postgrado` (`id_formacion`, `nombre_formacion`) VALUES
(1, 'FORMACION 1'),
(2, 'FORMACION 2'),
(3, 'FORMACION 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijo`
--

CREATE TABLE IF NOT EXISTS `hijo` (
`id_hijo` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_nivel_estudio` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `hijo`
--

INSERT INTO `hijo` (`id_hijo`, `fecha_nacimiento`, `id_persona`, `id_empleado`, `id_nivel_estudio`) VALUES
(1, '2004-01-02', 11, 1, 2),
(2, '2004-01-02', 13, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_labor`
--

CREATE TABLE IF NOT EXISTS `lugar_labor` (
`id_lugar_labor` int(11) NOT NULL,
  `nombre_lugar_labor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `lugar_labor`
--

INSERT INTO `lugar_labor` (`id_lugar_labor`, `nombre_lugar_labor`) VALUES
(1, 'LUGAR 1'),
(2, 'LUGAR 2'),
(3, 'LUGAR 3'),
(4, 'LUGAR 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudio`
--

CREATE TABLE IF NOT EXISTS `nivel_estudio` (
`id_nivel_estudio` int(11) NOT NULL,
  `nombre_nivel_estudio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `nivel_estudio`
--

INSERT INTO `nivel_estudio` (`id_nivel_estudio`, `nombre_nivel_estudio`) VALUES
(1, 'NIVEL ESTUDIO 1'),
(2, 'NIVEL ESTUDIO 2'),
(3, 'NIVEL ESTUDIO 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`id_persona` int(11) NOT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `cedula`, `nombres`, `apellidos`) VALUES
(4, '22312087', 'ANGELO JOSE', 'VASQUEZ PINA'),
(5, '33333333', 'ASASDASD', 'ASFASFAS'),
(6, '1231651', 'AAAAA', 'ASKJASHD'),
(8, NULL, 'BBBBB', 'BBBBD'),
(9, NULL, 'ASDAS', 'ASDSAD'),
(10, NULL, 'FFFFFFFF', 'GFFGFGF'),
(11, NULL, 'VVVVAA', 'BBBBBBBB'),
(13, '12345678', 'ASDASD', 'ASASD'),
(14, '55555555', 'ASDASDAS', 'FAFSFASADAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sintesis_curricular`
--

CREATE TABLE IF NOT EXISTS `sintesis_curricular` (
`id_sintesis` int(11) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `sintesis_curricular`
--

INSERT INTO `sintesis_curricular` (`id_sintesis`, `direccion`, `id_empleado`) VALUES
(6, '../data/2_BIOLOGIA.docx', 2),
(7, '../data/1_dec.docx', 1),
(8, '../data/4_Modelo de Transport1.docx', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE IF NOT EXISTS `vivienda` (
`id_vivienda` int(11) NOT NULL,
  `nombre_vivienda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id_vivienda`, `nombre_vivienda`) VALUES
(1, 'VIVIENDA 1'),
(2, 'VIVIENDA 2'),
(3, 'VIVIENDA 3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `condicion_contrato`
--
ALTER TABLE `condicion_contrato`
 ADD PRIMARY KEY (`id_condicion_contrato`);

--
-- Indices de la tabla `dedicacion`
--
ALTER TABLE `dedicacion`
 ADD PRIMARY KEY (`id_dedicacion`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`id_empleado`), ADD KEY `id_persona` (`id_persona`), ADD KEY `id_condicion_contrato` (`id_condicion_contrato`), ADD KEY `id_formacion` (`id_formacion`), ADD KEY `id_categoria` (`id_categoria`), ADD KEY `id_dedicacion` (`id_dedicacion`), ADD KEY `id_lugar_labor` (`id_lugar_labor`), ADD KEY `id_vivienda` (`id_vivienda`);

--
-- Indices de la tabla `formacion_postgrado`
--
ALTER TABLE `formacion_postgrado`
 ADD PRIMARY KEY (`id_formacion`);

--
-- Indices de la tabla `hijo`
--
ALTER TABLE `hijo`
 ADD PRIMARY KEY (`id_hijo`), ADD KEY `id_persona` (`id_persona`), ADD KEY `id_empleado` (`id_empleado`), ADD KEY `id_nivel_estudio` (`id_nivel_estudio`);

--
-- Indices de la tabla `lugar_labor`
--
ALTER TABLE `lugar_labor`
 ADD PRIMARY KEY (`id_lugar_labor`);

--
-- Indices de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
 ADD PRIMARY KEY (`id_nivel_estudio`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id_persona`), ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `sintesis_curricular`
--
ALTER TABLE `sintesis_curricular`
 ADD PRIMARY KEY (`id_sintesis`), ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
 ADD PRIMARY KEY (`id_vivienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `condicion_contrato`
--
ALTER TABLE `condicion_contrato`
MODIFY `id_condicion_contrato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `dedicacion`
--
ALTER TABLE `dedicacion`
MODIFY `id_dedicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `formacion_postgrado`
--
ALTER TABLE `formacion_postgrado`
MODIFY `id_formacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hijo`
--
ALTER TABLE `hijo`
MODIFY `id_hijo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lugar_labor`
--
ALTER TABLE `lugar_labor`
MODIFY `id_lugar_labor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nivel_estudio`
--
ALTER TABLE `nivel_estudio`
MODIFY `id_nivel_estudio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `sintesis_curricular`
--
ALTER TABLE `sintesis_curricular`
MODIFY `id_sintesis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
MODIFY `id_vivienda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_condicion_contrato`) REFERENCES `condicion_contrato` (`id_condicion_contrato`),
ADD CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`id_formacion`) REFERENCES `formacion_postgrado` (`id_formacion`),
ADD CONSTRAINT `empleado_ibfk_4` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
ADD CONSTRAINT `empleado_ibfk_5` FOREIGN KEY (`id_dedicacion`) REFERENCES `dedicacion` (`id_dedicacion`),
ADD CONSTRAINT `empleado_ibfk_6` FOREIGN KEY (`id_lugar_labor`) REFERENCES `lugar_labor` (`id_lugar_labor`),
ADD CONSTRAINT `empleado_ibfk_7` FOREIGN KEY (`id_vivienda`) REFERENCES `vivienda` (`id_vivienda`);

--
-- Filtros para la tabla `hijo`
--
ALTER TABLE `hijo`
ADD CONSTRAINT `hijo_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
ADD CONSTRAINT `hijo_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
ADD CONSTRAINT `hijo_ibfk_3` FOREIGN KEY (`id_nivel_estudio`) REFERENCES `nivel_estudio` (`id_nivel_estudio`);

--
-- Filtros para la tabla `sintesis_curricular`
--
ALTER TABLE `sintesis_curricular`
ADD CONSTRAINT `sintesis_curricular_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
