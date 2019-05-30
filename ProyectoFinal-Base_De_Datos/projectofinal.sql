-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2019 a las 10:20:47
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
-- Base de datos: `projectofinal`
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
  `Rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erroresbase`
--

CREATE TABLE `erroresbase` (
  `id` int(11) NOT NULL,
  `Motivo` varchar(400) NOT NULL,
  `CorreoCliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `id_Incidencia` int(11) NOT NULL,
  `id_Tecnico` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura Stand-in para la vista `mostrarhistorialt`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `mostrarhistorialt` (
`id` int(10)
,`descripcionIncidencia` varchar(191)
,`nombre_usuario` varchar(191)
,`nombreTecnico` varchar(191)
,`descripcionTecnico` varchar(255)
,`Prioridad` varchar(191)
,`idEmpresa` int(10)
,`IdDepartamento` int(10) unsigned
);

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
-- Estructura de tabla para la tabla `respuestatecnico`
--

CREATE TABLE `respuestatecnico` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Id_incidencia` int(11) NOT NULL,
  `id_tecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura para la vista `contadortecnico`
--
DROP TABLE IF EXISTS `contadortecnico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contadortecnico`  AS  select `c`.`id` AS `id`,`c`.`nombre` AS `nombre`,`c`.`Rol` AS `Rol`,`c`.`IdDepartamento` AS `IdDepartamento`,count(`r`.`Id`) AS `Contador` from (`empleados` `c` left join `tecnico_incidencia` `r` on((`c`.`id` = `r`.`id_Tecnico`))) where (`c`.`Rol` = 'Tecnico') group by `c`.`id`,`c`.`nombre`,`c`.`Rol`,`c`.`IdDepartamento` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `mostrarhistorialt`
--
DROP TABLE IF EXISTS `mostrarhistorialt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mostrarhistorialt`  AS  select `incidencia`.`id` AS `id`,`incidencia`.`Descripcion` AS `descripcionIncidencia`,`empleados`.`nombre` AS `nombre_usuario`,`tec`.`nombre` AS `nombreTecnico`,`respuestatecnico`.`Descripcion` AS `descripcionTecnico`,`incidencia`.`Prioridad` AS `Prioridad`,`datos_empresa`.`id` AS `idEmpresa`,`incidencia`.`IdDepartamento` AS `IdDepartamento` from ((((`incidencia` join `empleados`) join `datos_empresa`) join `respuestatecnico`) join (`historial` join `empleados` `tec` on((`historial`.`id_Tecnico` = `tec`.`id`)))) where ((`incidencia`.`id` = `historial`.`id_Incidencia`) and (`empleados`.`id` = `incidencia`.`Id_Empleado_usuario`) and (`datos_empresa`.`id` = `empleados`.`IdEmpresa`) and (`respuestatecnico`.`Id_incidencia` = `incidencia`.`id`)) ;

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
-- Indices de la tabla `erroresbase`
--
ALTER TABLE `erroresbase`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `respuestatecnico`
--
ALTER TABLE `respuestatecnico`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `erroresbase`
--
ALTER TABLE `erroresbase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `respuestatecnico`
--
ALTER TABLE `respuestatecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tecnico_incidencia`
--
ALTER TABLE `tecnico_incidencia`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
