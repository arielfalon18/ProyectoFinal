-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2019 a las 18:23:37
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
-- Base de datos: `projectoFinal`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `contadortecnico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `contadortecnico` (
`id` int(10)
,`nombre` varchar(191)
,`Rol` varchar(191)
,`IdDepartamento` int(10) unsigned
,`Contador` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empresa`
--

CREATE TABLE `datos_empresa` (
  `id` int(10) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigoP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos_empresa`
--

INSERT INTO `datos_empresa` (`id`, `nombre`, `cif`, `direccion`, `ciudad`, `pais`, `codigoP`, `telefono`, `email`, `password`) VALUES
(1, 'Empresa', '12345678A', 'C/Rogent', 'Barcelona', 'España', '08026', 12345678, 'correo@gmail.com', '$2y$10$Z2ptghocrZDNlnyKPIN.G.5jDkyvZoyVgalEX/o79u21tElirdT26'),
(2, 'EmpresaANA', '213123', 'C/Rogent', 'Barcelona', 'España', '08026', 12345678, 'correo2@gmail.com', '$2y$10$T06X3/FpBvYRX8qG629y/OgPrr116mjo3GnNvhHb705zgvqxC6/SG'),
(3, 'DAW2 LOS MEJORES  S.L', 'B-5678902', 'c/ La Gloria Bendita', 'Los Angeles', 'del Nunca Jamás', '000000', 666555444, 'anna.huertas@iesjoandaustria.org', '$2y$10$TXhZ2fhuR9s.3FmKMyVSRei2c.XhU2n2/5ZrMuK1kQpO9CEBya.Dm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Planta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edificio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEmpresa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `Nombre`, `Planta`, `Edificio`, `IdEmpresa`) VALUES
(5, 'Departamento1', 'Planta1', 'Edifico1', 1),
(6, 'Departamento2', 'Planta2', 'Edificio2', 1),
(7, 'Departamento6', 'Planta6', 'Edificio6', 2),
(8, 'Informática', 'Planta5', 'Edificio2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `IdEmpresa` int(10) NOT NULL,
  `IdDepartamento` int(10) UNSIGNED NOT NULL,
  `Rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `dni`, `email`, `telefono`, `IdEmpresa`, `IdDepartamento`, `Rol`) VALUES
(22, 'Empleado1', '1122346688D', 'empleado1@gmail.com', 12345678, 1, 5, 'Usuario'),
(23, 'Empleado2', '12345648A', 'Empleado2@gmail.com', 12345678, 1, 5, 'Tecnico'),
(24, 'Jefe_De_Departamento', '12321A', 'Jefe_Departamento_1@gmail.com', 12345648, 1, 5, 'Personal'),
(25, 'EmpleadoJefeProye', '12345648A', 'EmpleadoJefePrueba@gmail.com', 12345648, 2, 7, 'Personal'),
(26, 'Empleado3', '2312321A', 'Empleado3@gmail.com', 12312321, 1, 6, 'Usuario'),
(27, 'Empleado4', '123123A', 'Empleado4@gmail.com', 123213213, 1, 6, 'Tecnico'),
(28, 'JefePersonal_Dep2', '123123A', 'JefePersonal_Dep2@gmail.com', 12345678, 1, 6, 'Personal'),
(29, 'EmpleadoNuevo', '12323123S', 'EmpleadoNuevo@gmail.com', 13123213, 1, 6, 'Usuario'),
(30, 'dasdas', '12345678A', 'as@gmail.com', 12312321, 3, 8, 'Usuario'),
(31, 'EmpleadoN', '12312312A', 'EmpleadoN@gmail.com', 123123123, 1, 6, 'Tecnico'),
(32, 'EmpleadoTecnico2', '123123A', 'EmpleadoTecni@gmail.com', 12312312, 1, 5, 'Tecnico');

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
  `Id_Empresa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id`, `FechaEntrada`, `FechaCierre`, `IdDepartamento`, `Descripcion`, `Imagenes`, `Id_Empleado_usuario`, `Estado`, `Prioridad`, `Id_Empresa`) VALUES
(2, '16-05-2019', '28/01/2012', 5, '            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quod id numquam tempore dignissimos deleniti minima saepe consectetur officiis nisi. Nesciunt, ex officia. Mollit', 'CapturaI.JPG', 22, 'Progreso', 'Baja', 1),
(6, '16-05-2019', '28/01/2012', 5, 'dasdasdasd', 'asdas', 22, 'Pendiente', 'Baja', 1),
(7, '21/05/2019', '21/05/2019', 6, 'Esto es una prueba', NULL, 26, 'Progreso', 'Baja', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `idEmpresa` int(10) NOT NULL,
  `idEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventarios`
--

INSERT INTO `inventarios` (`id`, `nombre`, `tipo`, `descripcion`, `idEmpresa`, `idEmpleado`) VALUES
(4, 'UnInventario', 'TipoInventario', 'UnaDescripcion', 1, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_empleado` int(10) NOT NULL,
  `Id_Empresa` int(11) NOT NULL,
  `Id_Departamento` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `rol`, `Id_empleado`, `Id_Empresa`, `Id_Departamento`) VALUES
(12, 'empleado1@gmail.com', '$2y$10$Y8E5dQ/qTgcGGOc9O.nqmerNdFC6Ae2GyIF.kP8WOdXG4vFK6/hxy', 'Usuario', 22, 1, 5),
(13, 'Empleado2@gmail.com', '$2y$10$pm/08pzbQOXR99xSwS.67eULTk9KAnxuQkYlknYGk7QhK/s/en4AC', 'Tecnico', 23, 1, 5),
(14, 'Jefe_Departamento_1@gmail.com', '$2y$10$zqp9Q3RbQQFrk/Z2nc6HcOUhk5e3E4UVEucS.2SsIyJN2STw7D1nK', 'Personal', 24, 1, 5),
(15, 'EmpleadoJefePrueba@gmail.com', '$2y$10$QkiO4i87tdDC46MS2vCc7.oAP9C9wpSMmuhMl14zn9MSGrNC5wASm', 'Personal', 25, 2, 7),
(16, 'Empleado3@gmail.com', '$2y$10$mjNwdrIfZ6GRHrndnAjWsu8/I51kCUxjTtYPSMp1gV73guUCv2sMG', 'Usuario', 26, 1, 6),
(17, 'Empleado4@gmail.com', '$2y$10$ZD8gJpAmAeg49oOm2jhREeFhHJJfs3uic/5q8lwsBzd0OorEu.OuW', 'Tecnico', 27, 1, 6),
(18, 'JefePersonal_Dep2@gmail.com', '$2y$10$8p5mzE.Fs8no.jK4.ZPs6uhiBnLk/Jl9uiIa/bXeZMgZlmHene44q', 'Personal', 28, 1, 6),
(19, 'EmpleadoNuevo@gmail.com', '$2y$10$jgjQmQdu0aAHYlsbzdvoP.l4CTNOpnpMQ5E2mYEyvDw0AgR1Qd28W', 'Usuario', 29, 1, 6),
(20, 'as@gmail.com', '$2y$10$gSffiRUKj67UxtWBnLQ96.93KKQ1G4i2e4.aJzQ4R7cuxWVmTupiO', 'Usuario', 30, 3, 8),
(21, 'EmpleadoN@gmail.com', '$2y$10$ijvvI2hRQ6dQGn0K.Dh8t.QgoI7E09WaDx7KvzYrntwtODYW/Y2ze', 'Tecnico', 31, 1, 6),
(22, 'EmpleadoTecni@gmail.com', '$2y$10$.fJ/MOsThy0SdWFSAs4An.FDqCPNj3DZQ9Jfn29VLKoRqd5yibD.y', 'Tecnico', 32, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `mostrarlosasignados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `mostrarlosasignados` (
`id` int(10)
,`FechaEntrada` varchar(191)
,`FechaCierre` varchar(191)
,`IdDepartamento` int(10) unsigned
,`Descripcion` varchar(191)
,`Imagenes` varchar(191)
,`Id_Empleado_usuario` int(11)
,`Estado` varchar(191)
,`Prioridad` varchar(191)
,`Id_Empresa` int(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `mostrartecnico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `mostrartecnico` (
`id` int(10)
,`nombre` varchar(191)
,`Rol` varchar(191)
,`IdDepartamento` int(10) unsigned
,`Contador` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico_incidencia`
--

CREATE TABLE `tecnico_incidencia` (
  `Id` int(11) NOT NULL,
  `id_Tecnico` int(11) NOT NULL,
  `iD_empleado` int(11) NOT NULL,
  `Id_Incidencia` int(11) NOT NULL,
  `Id_Departamento` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnico_incidencia`
--

INSERT INTO `tecnico_incidencia` (`Id`, `id_Tecnico`, `iD_empleado`, `Id_Incidencia`, `Id_Departamento`) VALUES
(24, 32, 22, 2, 5),
(25, 27, 26, 7, 6);

-- --------------------------------------------------------

--
-- Estructura para la vista `contadortecnico`
--
DROP TABLE IF EXISTS `contadortecnico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contadortecnico`  AS  select `c`.`id` AS `id`,`c`.`nombre` AS `nombre`,`c`.`Rol` AS `Rol`,`c`.`IdDepartamento` AS `IdDepartamento`,count(`r`.`Id`) AS `Contador` from (`empleados` `c` left join `tecnico_incidencia` `r` on((`c`.`id` = `r`.`id_Tecnico`))) where (`c`.`Rol` = 'Tecnico') group by `c`.`id`,`c`.`nombre`,`c`.`Rol`,`c`.`IdDepartamento` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `mostrarlosasignados`
--
DROP TABLE IF EXISTS `mostrarlosasignados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostrarlosasignados`  AS  select `incidencia`.`id` AS `id`,`incidencia`.`FechaEntrada` AS `FechaEntrada`,`incidencia`.`FechaCierre` AS `FechaCierre`,`incidencia`.`IdDepartamento` AS `IdDepartamento`,`incidencia`.`Descripcion` AS `Descripcion`,`incidencia`.`Imagenes` AS `Imagenes`,`incidencia`.`Id_Empleado_usuario` AS `Id_Empleado_usuario`,`incidencia`.`Estado` AS `Estado`,`incidencia`.`Prioridad` AS `Prioridad`,`incidencia`.`Id_Empresa` AS `Id_Empresa` from `incidencia` where (not(`incidencia`.`id` in (select `tecnico_incidencia`.`Id_Incidencia` from `tecnico_incidencia`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `mostrartecnico`
--
DROP TABLE IF EXISTS `mostrartecnico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostrartecnico`  AS  select `c`.`id` AS `id`,`c`.`nombre` AS `nombre`,`c`.`Rol` AS `Rol`,`c`.`IdDepartamento` AS `IdDepartamento`,count(`r`.`Id`) AS `Contador` from (`empleados` `c` left join `tecnico_incidencia` `r` on((`c`.`id` = `r`.`id_Tecnico`))) where (`c`.`Rol` = 'Tecnico') group by `c`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_idempresa_foreign` (`IdEmpresa`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_idempresa_foreign` (`IdEmpresa`),
  ADD KEY `IdDepartamento` (`IdDepartamento`);

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_Empleado_usuario` (`Id_Empleado_usuario`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmpleado` (`idEmpleado`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_empleado` (`Id_empleado`),
  ADD KEY `Id_Departamento` (`Id_Departamento`);

--
-- Indices de la tabla `tecnico_incidencia`
--
ALTER TABLE `tecnico_incidencia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_Incidencia` (`Id_Incidencia`),
  ADD KEY `Id_Departamento` (`Id_Departamento`),
  ADD KEY `id_Tecnico` (`id_Tecnico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tecnico_incidencia`
--
ALTER TABLE `tecnico_incidencia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`IdEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`IdDepartamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`IdEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `incidencia_ibfk_1` FOREIGN KEY (`Id_Empleado_usuario`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD CONSTRAINT `inventarios_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventarios_ibfk_2` FOREIGN KEY (`idEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`Id_Departamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tecnico_incidencia`
--
ALTER TABLE `tecnico_incidencia`
  ADD CONSTRAINT `tecnico_incidencia_ibfk_2` FOREIGN KEY (`Id_Departamento`) REFERENCES `empleados` (`IdDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tecnico_incidencia_ibfk_3` FOREIGN KEY (`id_Tecnico`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
