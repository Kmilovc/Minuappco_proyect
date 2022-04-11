-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2022 a las 22:24:12
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
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id_aviso` int(6) NOT NULL,
  `asunto_aviso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_aviso` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_aviso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id_aviso`, `asunto_aviso`, `descripcion_aviso`, `fecha_aviso`) VALUES
(1, 'CORTE DE AGUA  ', 'Se suspenderá el servicio de agua el próximo domingo 24 de abril por mantenimiento, el cual se espera tenga una duración de 12 horas, se aconseja tener reservas de agua para esa fecha.', '2022-04-03 00:27:59'),
(4, 'VACUNACION COVID', 'jORNADA DE VACUNACION EL DOMINGO 17 DE ABRIL EN EL DALON COMUNAL', '2022-04-03 00:44:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `id_casa` int(4) NOT NULL,
  `casa_id_personas` int(10) NOT NULL,
  `casa_representante` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `casa_estado` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id_casa`, `casa_id_personas`, `casa_representante`, `casa_estado`) VALUES
(1, 1016068348, 'Camilo', 'OCUPADO'),
(2, 1033812673, 'Nicolas', 'OCUPADO'),
(3, 1053722742, 'Yesid', 'OCUPADO'),
(4, 1023910666, 'Johana', 'DESOCUPADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillero`
--

CREATE TABLE `casillero` (
  `id_casillero` int(3) NOT NULL,
  `estado_casillero` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_casillero` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `casillero`
--

INSERT INTO `casillero` (`id_casillero`, `estado_casillero`, `descripcion_casillero`) VALUES
(1, 'LLENO', 'Paquete de servientrega'),
(2, 'LLENO', 'Paquete mercado libre'),
(3, 'VACIO', 'Vacio'),
(4, 'VACIO', 'Vacio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqueadero`
--

CREATE TABLE `parqueadero` (
  `id_parqueadero` int(3) NOT NULL,
  `parqueadero_id_casa` int(11) NOT NULL,
  `Tipo_Parqueadero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Estado_Parqueadero` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `parqueadero`
--

INSERT INTO `parqueadero` (`id_parqueadero`, `parqueadero_id_casa`, `Tipo_Parqueadero`, `Estado_Parqueadero`) VALUES
(1, 4, 'moto', 'vacio'),
(2, 3, 'moto', 'vacio'),
(3, 2, 'moto', 'vacio'),
(4, 1, 'moto', 'vacio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `usuario_Id` int(10) NOT NULL,
  `personas_id_roll` int(3) NOT NULL,
  `persona_id_casa` int(3) NOT NULL,
  `contrasena_personas` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_principal` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_secundario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `tel_principal` int(11) NOT NULL,
  `tel_secundario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`usuario_Id`, `personas_id_roll`, `persona_id_casa`, `contrasena_personas`, `nombre`, `apellido`, `correo_principal`, `correo_secundario`, `tel_principal`, `tel_secundario`) VALUES
(1016068348, 1, 1, '1111', 'camilo', 'velasquez', 'camvelasquez164misena.edu.co', 'camvelasquez@hotmail.com', 2147483647, 2147483647),
(1023910666, 3, 2, '4444', 'johana', 'caceres', 'jmcaceres6@misena.edu.co', 'johamile_08@hotmail.com', 2147483647, 2147483647),
(1033812673, 2, 3, '2222', 'nicolas', 'rodriguez', 'nicerodrigeuz1@misena.edu.co', 'nicolasrodriguez@hotmail.com', 2147483647, 2147483647),
(1053722742, 3, 4, '3333', 'yesid', 'solis', 'yessolis@misena.edu.co', 'yesidsolis@hotmail.com', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roll`
--

CREATE TABLE `roll` (
  `roll_id` int(2) NOT NULL,
  `tipo_roll` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roll`
--

INSERT INTO `roll` (`roll_id`, `tipo_roll`) VALUES
(1, 'Administrador'),
(2, 'Porteria'),
(3, 'Residente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id_solicitud` int(10) NOT NULL,
  `solicitud_id_casa` int(4) NOT NULL,
  `Descripcion_Solicitud` varchar(130) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo_Solicitud` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Solicitud` timestamp NOT NULL DEFAULT current_timestamp(),
  `solicitud_respuesta` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `solicitud_fecha_respuesta` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id_solicitud`, `solicitud_id_casa`, `Descripcion_Solicitud`, `Tipo_Solicitud`, `Fecha_Solicitud`, `solicitud_respuesta`, `solicitud_fecha_respuesta`) VALUES
(1, 3, 'permiso para sacar trasteo', 'solicitud', '2022-03-05 05:00:00', '', '2022-04-03 14:17:12'),
(2, 4, 'permiso para sacar trasteo', 'solicitud', '2022-03-05 05:00:00', '', '2022-04-03 14:17:12'),
(3, 1, 'permiso para sacar trasteo', 'solicitud', '2022-03-05 05:00:00', '', '2022-04-03 14:17:12'),
(4, 2, 'permiso para sacar trasteo', 'solicitud', '2022-03-05 05:00:00', '', '2022-04-03 14:17:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id_visitas` int(4) NOT NULL,
  `visitas_id_casa` int(4) NOT NULL,
  `tipo_visita` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_visita` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Visita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id_visitas`, `visitas_id_casa`, `tipo_visita`, `descripcion_visita`, `Fecha_Visita`) VALUES
(1, 4, 'visita personal', 'visita de jorge cuentas familiar del residente', '2022-04-07'),
(2, 1, 'revision del agua', '0', '2022-03-05'),
(3, 2, 'revision del luz', '0', '2022-03-06'),
(4, 3, 'revision internet', '0', '2022-03-07'),
(5, 4, 'revision del gas', '0', '2022-03-05'),
(6, 4, 'revision del agua', 'visita de jorge cuentas familiar del residente', '2022-04-13'),
(7, 2, 'revision del agua', 'me van a cortar el agua', '2022-04-22'),
(16, 2, 'revision del gas', 'VAN A CORTAR EL GAS', '2022-04-16'),
(17, 2, 'revision de internet', 'ME CORTARON LA PERUBOLICA', '2022-04-30'),
(21, 1, 'otra', 'uuuuuuuuuuuuuuu', '2022-04-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id_casa`),
  ADD KEY `usuario_Id` (`casa_id_personas`) USING BTREE;

--
-- Indices de la tabla `casillero`
--
ALTER TABLE `casillero`
  ADD PRIMARY KEY (`id_casillero`);

--
-- Indices de la tabla `parqueadero`
--
ALTER TABLE `parqueadero`
  ADD PRIMARY KEY (`id_parqueadero`),
  ADD KEY `Id_casa` (`parqueadero_id_casa`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`usuario_Id`),
  ADD KEY `Id_roll` (`personas_id_roll`),
  ADD KEY `persona_id_casa` (`persona_id_casa`);

--
-- Indices de la tabla `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `Id_casa` (`solicitud_id_casa`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id_visitas`),
  ADD KEY `Id_casa` (`visitas_id_casa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id_aviso` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id_solicitud` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id_visitas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `parqueadero`
--
ALTER TABLE `parqueadero`
  ADD CONSTRAINT `parqueadero_ibfk_1` FOREIGN KEY (`parqueadero_id_casa`) REFERENCES `casas` (`id_casa`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `persona_id_casa` FOREIGN KEY (`persona_id_casa`) REFERENCES `casas` (`id_casa`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`solicitud_id_casa`) REFERENCES `casas` (`id_casa`);

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`visitas_id_casa`) REFERENCES `casas` (`id_casa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
