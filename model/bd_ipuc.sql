-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2023 a las 20:42:55
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
-- Base de datos: `bd_ipuc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultos`
--

CREATE TABLE `cultos` (
  `id` int(11) NOT NULL,
  `nombre_culto` varchar(50) NOT NULL,
  `fecha_culto` date NOT NULL,
  `asistencia` int(11) NOT NULL,
  `ofrenda` int(11) NOT NULL,
  `visitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cultos`
--

INSERT INTO `cultos` (`id`, `nombre_culto`, `fecha_culto`, `asistencia`, `ofrenda`, `visitas`) VALUES
(7, 'Culto de Jovenes', '2023-10-14', 60, 50000, 10),
(8, 'Damas Dorcas', '2023-11-16', 50, 60000, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `n_identificacion` bigint(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `n_contacto` bigint(20) NOT NULL,
  `f_bautismo` date NOT NULL,
  `pastor` varchar(50) NOT NULL,
  `bautismo_ES` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `apellido`, `n_identificacion`, `sexo`, `f_nacimiento`, `n_contacto`, `f_bautismo`, `pastor`, `bautismo_ES`) VALUES
(20, 'Diego', 'Trujillo', 1233343893, 'Femenino', '1999-01-06', 3044825729, '2019-03-24', 'Matias Mogrovejo', '2021-03-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cultos`
--
ALTER TABLE `cultos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cultos`
--
ALTER TABLE `cultos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
