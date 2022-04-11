-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2021 a las 22:57:24
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jardines_de_castilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa`
--

CREATE TABLE `casa` (
  `casa_id` int(3) NOT NULL,
  `casa_representante` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `casa_estado` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `casa`
--

INSERT INTO `casa` (`casa_id`, `casa_representante`, `casa_estado`) VALUES
(1, 'JUanito', '1'),
(2, 'camilo', 'ocupado'),
(3, 'nicolas melo', 'ocupado'),
(4, 'yesid ', 'ocupado'),
(5, 'gabriels', 'ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillero`
--

CREATE TABLE `casillero` (
  `casi_id` int(3) NOT NULL,
  `casi_casa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movi_casi`
--

CREATE TABLE `movi_casi` (
  `casi_registro` int(5) NOT NULL,
  `casi_descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `casi_estado` int(1) NOT NULL,
  `movi_casi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueadero`
--

CREATE TABLE `parqueadero` (
  `parq_id` int(3) NOT NULL,
  `parq_tipo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `parq_Estado` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `parq_casa_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `parqueadero`
--

INSERT INTO `parqueadero` (`parq_id`, `parq_tipo`, `parq_Estado`, `parq_casa_id`) VALUES
(1, 'Moto', 'Ocupado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitude`
--

CREATE TABLE `solicitude` (
  `soli_id` int(5) NOT NULL,
  `soli_fecha` date NOT NULL,
  `soli_comentario` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `soli_usu_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soli_tipo`
--

CREATE TABLE `soli_tipo` (
  `soli_tipo` int(1) NOT NULL,
  `soli_tipo_descrip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_soli` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vis`
--

CREATE TABLE `tipo_vis` (
  `vis_tipo` int(2) NOT NULL,
  `vis_tipo_descrip` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `visi_tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(3) NOT NULL,
  `usu_roll` int(1) NOT NULL,
  `usu_pasword` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_cc` int(10) NOT NULL,
  `usu_nom` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_tel` int(10) NOT NULL,
  `usu_tels` int(10) NOT NULL,
  `usu_email` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `usu_emails` int(40) NOT NULL,
  `usu_casa_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `vis_id` int(5) NOT NULL,
  `vis_nombre` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `vis_identificacion` int(20) NOT NULL,
  `vis_fecha` datetime NOT NULL,
  `vis_fechas` datetime NOT NULL,
  `vis_comentario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `vis_casa_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casa`
--
ALTER TABLE `casa`
  ADD PRIMARY KEY (`casa_id`);

--
-- Indices de la tabla `casillero`
--
ALTER TABLE `casillero`
  ADD PRIMARY KEY (`casi_id`);

--
-- Indices de la tabla `movi_casi`
--
ALTER TABLE `movi_casi`
  ADD PRIMARY KEY (`casi_registro`);

--
-- Indices de la tabla `parqueadero`
--
ALTER TABLE `parqueadero`
  ADD PRIMARY KEY (`parq_id`);

--
-- Indices de la tabla `solicitude`
--
ALTER TABLE `solicitude`
  ADD PRIMARY KEY (`soli_id`);

--
-- Indices de la tabla `soli_tipo`
--
ALTER TABLE `soli_tipo`
  ADD PRIMARY KEY (`soli_tipo`);

--
-- Indices de la tabla `tipo_vis`
--
ALTER TABLE `tipo_vis`
  ADD PRIMARY KEY (`vis_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`vis_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movi_casi`
--
ALTER TABLE `movi_casi`
  MODIFY `casi_registro` int(5) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casillero`
--
ALTER TABLE `casillero`
  ADD CONSTRAINT `casillero_ibfk_1` FOREIGN KEY (`casi_casa`) REFERENCES `casa` (`casa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movi_casi`
--
ALTER TABLE `movi_casi`
  ADD CONSTRAINT `movi_casi_ibfk_1` FOREIGN KEY (`movi_casi`) REFERENCES `casillero` (`casi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `parqueadero`
--
ALTER TABLE `parqueadero`
  ADD CONSTRAINT `parqueadero_ibfk_1` FOREIGN KEY (`parq_casa_id`) REFERENCES `casa` (`casa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitude`
--
ALTER TABLE `solicitude`
  ADD CONSTRAINT `solicitude_ibfk_1` FOREIGN KEY (`soli_usu_id`) REFERENCES `casa` (`casa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `soli_tipo`
--
ALTER TABLE `soli_tipo`
  ADD CONSTRAINT `soli_tipo_ibfk_1` FOREIGN KEY (`tipo_soli`) REFERENCES `solicitude` (`soli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_vis`
--
ALTER TABLE `tipo_vis`
  ADD CONSTRAINT `tipo_vis_ibfk_1` FOREIGN KEY (`visi_tipo`) REFERENCES `visitas` (`vis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`usu_casa_id`) REFERENCES `casa` (`casa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`vis_casa_id`) REFERENCES `casa` (`casa_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
