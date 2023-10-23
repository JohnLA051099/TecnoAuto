-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 01:17:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoauto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `Comentarios` int(11) NOT NULL,
  `id_auto` int(11) NOT NULL,
  `id_estatus` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_auto`
--

CREATE TABLE `datos_auto` (
  `id_auto` int(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `fechaIngreso` datetime NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` int(4) NOT NULL,
  `vin` varchar(17) NOT NULL,
  `kilometraje` int(8) NOT NULL,
  `color` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_pago` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `monto` double NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(50) NOT NULL,
  `apellido_m` varchar(50) NOT NULL,
  `edad` int(2) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(10) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(12) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_pago` (`id_pago`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_estatus` (`id_estatus`),
  ADD KEY `id_auto` (`id_auto`);

--
-- Indices de la tabla `datos_auto`
--
ALTER TABLE `datos_auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_auto`
--
ALTER TABLE `datos_auto`
  MODIFY `id_auto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_auto`) REFERENCES `datos_auto` (`id_auto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_pago`) REFERENCES `pagos` (`id_pago`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_auto`
--
ALTER TABLE `datos_auto`
  ADD CONSTRAINT `datos_auto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
