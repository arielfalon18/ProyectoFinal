-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2019 a las 00:57:58
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
-- Estructura de tabla para la tabla `datos_empresa`
--

-- Creamos la base de datos inventario

CREATE TABLE `inventarios` (
  `id` INT(10) NOT NULL AUTO_INCREMENT , 
  `nombre` VARCHAR(20) NOT NULL ,
  `tipo` VARCHAR(20) NOT NULL ,
  `descripcion` VARCHAR(50) NOT NULL ,
  `idEmpresa` INT(10) NOT NULL ,
  `idEmpleado` INT(10) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


CREATE TABLE `datos_empresa` (
  `id` int(10) UNSIGNED NOT NULL,
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
(2, 'EmpresaANA', '213123', 'C/Rogent', 'Barcelona', 'España', '08026', 12345678, 'ariel.falon@iesjoandaustria.org', '$2y$10$T06X3/FpBvYRX8qG629y/OgPrr116mjo3GnNvhHb705zgvqxC6/SG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Planta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edificio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEmpresa` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `Nombre`, `Planta`, `Edificio`, `IdEmpresa`) VALUES
(1, 'Departamento1', 'Planta1', 'Edificio1', 1),
(2, 'Departamento2', 'Planta2', 'Edificio2', 1),
(3, 'Departamento3', 'Planta3', 'Edifico3', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `IdEmpresa` int(10) UNSIGNED NOT NULL,
  `IdDepartamento` int(10) UNSIGNED NOT NULL,
  `Rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `dni`, `email`, `telefono`, `IdEmpresa`, `IdDepartamento`, `Rol`) VALUES
(15, 'Empleado2', '12312321', 'empleado4@gmail.com', 123123123, 1, 2, 'Tecnico'),
(16, 'Empleado3', '123123A', 'empleado3@gmail.com', 12312321, 1, 2, 'Tecnico'),
(17, 'Empleado1', '21321321', 'adasd@gmail.com', 123213, 2, 3, 'Tecnico'),
(18, 'Empleado4', '122132A', 'empleado4@gmail.com', 12312312, 1, 1, 'Usuario');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `FechaEntrada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaCierre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCategoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagenes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Empleado_usuario` int(11) NOT NULL,
  `Id_Empleado_tecnico` int(11) NOT NULL,
  `NombrePrioridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prioridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Idinventario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuarioLogin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paswordLogin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_empleado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuarioLogin`, `paswordLogin`, `rol`, `Id_empleado`) VALUES
(6, 'empleado4@gmail.com', '$2y$10$XOnUuXPLdx0lNrxbrG6ZFOPjflRzC96bDUR4u0.d.oxuHXbgZeujm', 'Tecnico', 15),
(7, 'empleado3@gmail.com', '$2y$10$YHXk18fFlJiVzX.WLrHzheuXNXNbC/zFBoxvp12ze/JktTutRk3j6', 'Tecnico', 16),
(8, 'adasd@gmail.com', '$2y$10$w/46G5axIIPq6NBFg9wq5.1YNBOzI1eC6Rbtqx7gXH3DCnBt.KzdG', 'Tecnico', 17),
(9, 'empleado4@gmail.com', '$2y$10$jm6EMpIJjjbSC1kxVPuSJO3mIL4uc.2lIcACVz8OwtuuCRIwGsp6K', 'Usuario', 18);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_12_162304_users', 1),
(2, '2019_04_24_165300_datos__empresa', 1),
(3, '2019_04_26_175843_empleado', 1),
(4, '2019_05_01_192339_departamento', 1),
(5, '2019_05_01_193544_inventario', 1),
(6, '2019_05_01_193553_historial', 1),
(7, '2019_05_02_115952_incidencia', 1),
(8, '2019_05_03_173841_rol', 1),
(9, '2019_05_05_221048_login', 1);

-- --------------------------------------------------------


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
  ADD KEY `incidencia_idempresa_foreign` (`IdEmpresa`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id_empleado_foreign` (`Id_empleado`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_R`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_idempresa_foreign` FOREIGN KEY (`IdEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`IdDepartamento`) REFERENCES `departamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_idempresa_foreign` FOREIGN KEY (`IdEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD CONSTRAINT `incidencia_idempresa_foreign` FOREIGN KEY (`IdEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_id_empleado_foreign` FOREIGN KEY (`Id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
