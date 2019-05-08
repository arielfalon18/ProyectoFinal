-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 08-05-2019 a les 16:44:19
-- Versió del servidor: 10.1.38-MariaDB
-- Versió de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `projecto`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `datos_empresa`
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
-- Bolcament de dades per a la taula `datos_empresa`
--

INSERT INTO `datos_empresa` (`id`, `nombre`, `cif`, `direccion`, `ciudad`, `pais`, `codigoP`, `telefono`, `email`, `password`) VALUES
(1, 'Empresa', '12345678A', 'C/Rogent', 'Barcelona', 'España', '08026', 12345678, 'correo@gmail.com', '$2y$10$Z2ptghocrZDNlnyKPIN.G.5jDkyvZoyVgalEX/o79u21tElirdT26'),
(2, 'EmpresaANA', '213123', 'C/Rogent', 'Barcelona', 'España', '08026', 12345678, 'ariel.falon@iesjoandaustria.org', '$2y$10$T06X3/FpBvYRX8qG629y/OgPrr116mjo3GnNvhHb705zgvqxC6/SG');

-- --------------------------------------------------------

--
-- Estructura de la taula `departamento`
--

CREATE TABLE `departamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Planta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edificio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdEmpresa` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `departamento`
--

INSERT INTO `departamento` (`id`, `Nombre`, `Planta`, `Edificio`, `IdEmpresa`) VALUES
(1, 'Departamento1', 'Planta1', 'Edificio1', 1),
(2, 'Departamento2', 'Planta2', 'Edificio2', 1),
(3, 'Departamento3', 'Planta3', 'Edifico3', 2);

-- --------------------------------------------------------

--
-- Estructura de la taula `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `IdEmpresa` int(10) UNSIGNED NOT NULL,
  `IdDepartamento` int(10) UNSIGNED NOT NULL,
  `Rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `dni`, `email`, `telefono`, `IdEmpresa`, `IdDepartamento`, `Rol`) VALUES
(15, 'Empleado2', '12312321', 'empleado4@gmail.com', 123123123, 1, 2, 'Tecnico'),
(16, 'Empleado3', '123123A', 'empleado3@gmail.com', 12312321, 1, 2, 'Tecnico'),
(18, 'Empleado4', '122132A', 'empleado4@gmail.com', 12312312, 1, 1, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de la taula `incidencia`
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
-- Estructura de la taula `inventarios`
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
-- Bolcament de dades per a la taula `inventarios`
--

INSERT INTO `inventarios` (`id`, `nombre`, `tipo`, `descripcion`, `idEmpresa`, `idEmpleado`) VALUES
(1, '123', 'qwe', 'qweqwe', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `usuarioLogin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paswordLogin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_empleado` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `login`
--

INSERT INTO `login` (`id`, `usuarioLogin`, `paswordLogin`, `rol`, `Id_empleado`) VALUES
(6, 'empleado4@gmail.com', '$2y$10$XOnUuXPLdx0lNrxbrG6ZFOPjflRzC96bDUR4u0.d.oxuHXbgZeujm', 'Tecnico', 15),
(7, 'empleado3@gmail.com', '$2y$10$YHXk18fFlJiVzX.WLrHzheuXNXNbC/zFBoxvp12ze/JktTutRk3j6', 'Tecnico', 16),
(9, 'empleado4@gmail.com', '$2y$10$jm6EMpIJjjbSC1kxVPuSJO3mIL4uc.2lIcACVz8OwtuuCRIwGsp6K', 'Usuario', 18);

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `migrations`
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
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `datos_empresa`
--
ALTER TABLE `datos_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_idempresa_foreign` (`IdEmpresa`);

--
-- Índexs per a la taula `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_idempresa_foreign` (`IdEmpresa`),
  ADD KEY `IdDepartamento` (`IdDepartamento`);

--
-- Índexs per a la taula `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `datos_empresa`
--
ALTER TABLE `datos_empresa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT per la taula `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
