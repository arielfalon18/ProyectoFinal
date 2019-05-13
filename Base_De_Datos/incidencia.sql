-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2019 a las 19:31:23
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id` int(10) NOT NULL,
  `FechaEntrada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaCierre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdDepartamento` int(10) UNSIGNED NOT NULL,
  `Descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagenes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Id_Empleado_usuario` int(11) NOT NULL,
  `Estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prioridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdInventario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id`, `FechaEntrada`, `FechaCierre`, `IdDepartamento`, `Descripcion`, `Imagenes`, `Id_Empleado_usuario`, `Estado`, `Prioridad`, `IdInventario`) VALUES
(1, '09-05-2019', '09-05-2019', 1, 'e1wdqwdqw', 'Captura.PNG', 154, 'Finalizada', 'Media', 1),
(2, '09-05-2019', '09-05-2019', 2, 'eqweqwe', 'Captura.PNG', 154, 'Progreso', 'Baja', 1),
(3, '09-05-2019', '09-05-2019', 1, 'asdadasd', 'Captura.PNG', 154, 'Pendiente', 'Alta', 1),
(4, '09-05-2019', '09-05-2019', 1, 'asdasdas', 'Captura.PNG', 154, 'Cancelada', 'Media', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RelacionInc-Dep` (`IdDepartamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `RelacionInc-Dep` FOREIGN KEY (`IdDepartamento`) REFERENCES `departamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
