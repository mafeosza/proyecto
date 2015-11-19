-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2015 a las 08:56:38
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectophp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`idempresa` int(11) NOT NULL,
  `nombreEmpresa` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `emailEmpresa` varchar(45) NOT NULL,
  `nombreResponsable` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombreEmpresa`, `usuario`, `clave`, `telefono`, `emailEmpresa`, `nombreResponsable`) VALUES
(1, 'empresa', 'usuario', '123', '543', 'email', 'responsable'),
(2, 'empresaa', 'usuaua', '123', 'telefono', 'correo@correo', 'nombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediopago`
--

CREATE TABLE IF NOT EXISTS `mediopago` (
`idmedioPago` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
`idpago` int(11) NOT NULL,
  `realizado` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `medioPago_idmedioPago` int(11) NOT NULL,
  `subasta_idsubasta` int(11) NOT NULL,
  `subasta_producto_idproducto` int(11) NOT NULL,
  `subasta_producto_empresa_idempresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetepuja`
--

CREATE TABLE IF NOT EXISTS `paquetepuja` (
`idpaquetePuja` int(11) NOT NULL,
  `cantidadPujas` varchar(45) DEFAULT NULL,
  `precioPaquete` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
`idproducto` int(11) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` varchar(45) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  `tiempoEnvio` varchar(45) NOT NULL,
  `estadoProducto` varchar(45) DEFAULT NULL,
  `empresa_idempresa` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `foto`, `nombre`, `precio`, `caracteristicas`, `tiempoEnvio`, `estadoProducto`, `empresa_idempresa`) VALUES
(1, '../img/casa.jpg', 'cosa', '1233', 'bonito', '3 dias', '12', 1),
(2, '../img/carro.jpg', 'producto', '1242', 'bonito ', '2 dias ', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puja`
--

CREATE TABLE IF NOT EXISTS `puja` (
`idpuja` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `subasta_idsubasta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subasta`
--

CREATE TABLE IF NOT EXISTS `subasta` (
`idsubasta` int(11) NOT NULL,
  `producto_idproducto` int(11) NOT NULL,
  `producto_empresa_idempresa` int(11) NOT NULL,
  `fechaFinal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cantidadPujas` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `cedula`, `usuario`, `clave`, `direccion`, `telefono`, `email`, `cantidadPujas`) VALUES
(1, 'daniel', '123', 'user', '123', 'direccion', '23423', 'email', 10),
(2, 'proyecto final SW3', '234', '1094939085', '234', 'direccion', 'telefono', 'jose-2007@hotmail.com', 10),
(3, 'proyecto final SW3', '234', 'asd', '4234', 'direccion', 'telefono', 'jose-2007@hotmail.com', 10),
(4, 'proyecto final SW3', '234', 'asd', '4234', 'direccion', 'telefono', 'jose-2007@hotmail.com', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `mediopago`
--
ALTER TABLE `mediopago`
 ADD PRIMARY KEY (`idmedioPago`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
 ADD PRIMARY KEY (`idpago`,`usuario_idusuario`,`medioPago_idmedioPago`,`subasta_idsubasta`,`subasta_producto_idproducto`,`subasta_producto_empresa_idempresa`), ADD KEY `fk_pago_usuario1_idx` (`usuario_idusuario`), ADD KEY `fk_pago_medioPago1_idx` (`medioPago_idmedioPago`), ADD KEY `fk_pago_subasta1_idx` (`subasta_idsubasta`,`subasta_producto_idproducto`,`subasta_producto_empresa_idempresa`);

--
-- Indices de la tabla `paquetepuja`
--
ALTER TABLE `paquetepuja`
 ADD PRIMARY KEY (`idpaquetePuja`,`usuario_idusuario`), ADD KEY `fk_paquetePuja_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idproducto`,`empresa_idempresa`), ADD KEY `fk_producto_empresa_idx` (`empresa_idempresa`);

--
-- Indices de la tabla `puja`
--
ALTER TABLE `puja`
 ADD PRIMARY KEY (`idpuja`,`usuario_idusuario`,`subasta_idsubasta`), ADD KEY `fk_puja_usuario1_idx` (`usuario_idusuario`), ADD KEY `fk_puja_subasta1_idx` (`subasta_idsubasta`);

--
-- Indices de la tabla `subasta`
--
ALTER TABLE `subasta`
 ADD PRIMARY KEY (`idsubasta`,`producto_idproducto`,`producto_empresa_idempresa`), ADD KEY `fk_subasta_producto1_idx` (`producto_idproducto`,`producto_empresa_idempresa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `mediopago`
--
ALTER TABLE `mediopago`
MODIFY `idmedioPago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paquetepuja`
--
ALTER TABLE `paquetepuja`
MODIFY `idpaquetePuja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `puja`
--
ALTER TABLE `puja`
MODIFY `idpuja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `subasta`
--
ALTER TABLE `subasta`
MODIFY `idsubasta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
ADD CONSTRAINT `fk_pago_medioPago1` FOREIGN KEY (`medioPago_idmedioPago`) REFERENCES `mediopago` (`idmedioPago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pago_subasta1` FOREIGN KEY (`subasta_idsubasta`, `subasta_producto_idproducto`, `subasta_producto_empresa_idempresa`) REFERENCES `subasta` (`idsubasta`, `producto_idproducto`, `producto_empresa_idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pago_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paquetepuja`
--
ALTER TABLE `paquetepuja`
ADD CONSTRAINT `fk_paquetePuja_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `fk_producto_empresa` FOREIGN KEY (`empresa_idempresa`) REFERENCES `empresa` (`idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puja`
--
ALTER TABLE `puja`
ADD CONSTRAINT `fk_puja_subasta1` FOREIGN KEY (`subasta_idsubasta`) REFERENCES `subasta` (`idsubasta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_puja_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subasta`
--
ALTER TABLE `subasta`
ADD CONSTRAINT `fk_subasta_producto1` FOREIGN KEY (`producto_idproducto`, `producto_empresa_idempresa`) REFERENCES `producto` (`idproducto`, `empresa_idempresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
