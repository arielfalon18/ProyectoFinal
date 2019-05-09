-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2019 a las 16:42:53
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

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
  `IdEmpresa` int(10) NOT NULL
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
(15, 'Empleado2', '12312321', 'empleado4@gmail.com', 123123123, 1, 2, 'Tecnico'),
(16, 'Empleado3', '123123A', 'empleado3@gmail.com', 12312321, 1, 2, 'Tecnico'),
(18, 'Empleado4', '122132A', 'empleado4@gmail.com', 12312312, 1, 1, 'Usuario'),
(20, 'Empleado5', '123213S', 'Empleado5@gmail.com', 12345678, 1, 1, 'Tecnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id` int(10) NOT NULL,
  `FechaEntrada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaCierre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreCategoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagenes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_Empleado_usuario` int(11) NOT NULL,
  `Id_Empleado_tecnico` int(11) NOT NULL,
  `Estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prioridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdInventario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id`, `FechaEntrada`, `FechaCierre`, `NombreCategoria`, `Descripcion`, `Imagenes`, `Id_Empleado_usuario`, `Id_Empleado_tecnico`, `Estado`, `Prioridad`, `IdInventario`) VALUES
(1, '09-05-2019', '09-05-2019', 'Categoria3', 'e1wdqwdqw', 'Captura.PNG', 154, 145, 'Finalizada', 'Media', 1),
(2, '09-05-2019', '09-05-2019', 'Categoria2', 'eqweqwe', 'Captura.PNG', 154, 145, 'Progreso', 'Baja', 1),
(3, '09-05-2019', '09-05-2019', 'Categoria1', 'asdadasd', 'Captura.PNG', 154, 145, 'Pendiente', 'Alta', 1),
(4, '09-05-2019', '09-05-2019', 'Categoria1', 'asdasdas', 'Captura.PNG', 154, 145, 'Cancelada', 'Media', 1);

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
(1, '123', 'qwe', 'qweqwe', 1, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_empleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `rol`, `Id_empleado`) VALUES
(6, 'empleado4@gmail.com', '$2y$10$XOnUuXPLdx0lNrxbrG6ZFOPjflRzC96bDUR4u0.d.oxuHXbgZeujm', 'Tecnico', 15),
(7, 'empleado3@gmail.com', '$2y$10$YHXk18fFlJiVzX.WLrHzheuXNXNbC/zFBoxvp12ze/JktTutRk3j6', 'Tecnico', 16),
(9, 'empleado4@gmail.com', '$2y$10$jm6EMpIJjjbSC1kxVPuSJO3mIL4uc.2lIcACVz8OwtuuCRIwGsp6K', 'Usuario', 18),
(10, 'Empleado5@gmail.com', '$2y$10$tnRn02RN7Ww96AF8/u03J.BU3wfPAx07Ao/qp6cAQXpTZ9bbmx4H6', 'Tecnico', 20);

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
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `Id_empleado` (`Id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Filtros para la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD CONSTRAINT `inventarios_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventarios_ibfk_2` FOREIGN KEY (`idEmpresa`) REFERENCES `datos_empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`Id_empleado`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
