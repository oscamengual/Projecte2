-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 18:05:08
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2021_mengualoscar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE `tbl_incidencia` (
  `id_incidencia` int(5) NOT NULL,
  `nombre_incidencia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_incidencia` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_mantenimiento` int(5) NOT NULL,
  `id_mesa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_incidencia`
--

INSERT INTO `tbl_incidencia` (`id_incidencia`, `nombre_incidencia`, `descripcion_incidencia`, `id_mantenimiento`, `id_mesa`) VALUES
(1, 'Silla Rota', 'La silla de la mesa 3 esta rota', 1, 3),
(2, 'Silla Rota', 'Silla rota', 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE `tbl_mesa` (
  `id_mesa` int(5) NOT NULL,
  `capacidad_mesa` int(5) NOT NULL,
  `Disponibilidad` enum('Disponible','Reservada','Mantenimiento','') COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_ubicacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `capacidad_mesa`, `Disponibilidad`, `id_ubicacion`) VALUES
(1, 4, 'Disponible', 3),
(2, 4, 'Disponible', 3),
(3, 6, 'Disponible', 3),
(4, 2, 'Disponible', 3),
(5, 2, 'Disponible', 3),
(6, 8, 'Disponible', 1),
(7, 6, 'Disponible', 1),
(8, 4, 'Disponible', 1),
(9, 4, 'Disponible', 1),
(10, 4, 'Disponible', 1),
(11, 3, 'Disponible', 1),
(12, 3, 'Disponible', 1),
(13, 2, 'Disponible', 2),
(14, 2, 'Disponible', 2),
(15, 2, 'Disponible', 2),
(16, 2, 'Disponible', 2),
(17, 16, 'Disponible', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(5) NOT NULL,
  `Fecha_reserva` date NOT NULL,
  `id_mesa` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `franjas_horarias` enum('15-16','16-17','17-18','18-19','19-20','21-22','22-23') COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `Fecha_reserva`, `id_mesa`, `id_user`, `franjas_horarias`) VALUES
(38, '2021-01-01', 7, 4, '22-23'),
(39, '2020-12-26', 13, 10, '19-20'),
(40, '0000-00-00', 4, 10, '19-20'),
(41, '2020-12-19', 8, 10, '18-19'),
(42, '2020-12-26', 8, 10, '19-20'),
(43, '2020-12-18', 1, 10, '15-16'),
(44, '0000-00-00', 1, 10, '15-16'),
(45, '2021-01-02', 5, 4, '18-19'),
(46, '2021-01-08', 5, 4, '18-19'),
(47, '2021-01-09', 6, 4, '22-23'),
(48, '2021-01-09', 5, 4, '18-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ubicacion`
--

CREATE TABLE `tbl_ubicacion` (
  `id_ubicacion` int(5) NOT NULL,
  `Nombre_ubicacion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_ubicacion`
--

INSERT INTO `tbl_ubicacion` (`id_ubicacion`, `Nombre_ubicacion`) VALUES
(1, 'Comedor-1'),
(2, 'Comedor-2'),
(3, 'Terraza'),
(4, 'Sala privada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `nombre_user` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_user` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pswd_user` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nombre_user`, `apellido_user`, `email_user`, `pswd_user`, `estatus`) VALUES
(3, 'Albert ', 'Buendia', 'fran@admin.es', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(4, 'Óscar', 'Mengual', 'oscarmengual@admin.es', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(10, '', NULL, 'danielrueda@pringao.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mesa`),
  ADD KEY `FK_mesa_ubicacion` (`id_ubicacion`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `FK_reserva_mesa` (`id_mesa`),
  ADD KEY `FK_reserva_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_user_reserva` (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mesa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
  MODIFY `id_ubicacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD CONSTRAINT `FK_mesa_ubicacion` FOREIGN KEY (`id_ubicacion`) REFERENCES `tbl_ubicacion` (`id_ubicacion`);

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `FK_reserva_mesa` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`),
  ADD CONSTRAINT `tbl_reserva_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
