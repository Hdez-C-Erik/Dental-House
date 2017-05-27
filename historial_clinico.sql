-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2017 a las 16:56:59
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `historial_clinico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedente`
--

CREATE TABLE `antecedente` (
  `id_antecedente` int(4) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `enfermedad` text,
  `alergia` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedente`
--

INSERT INTO `antecedente` (`id_antecedente`, `fecha_ingreso`, `enfermedad`, `alergia`) VALUES
(1, '2002-06-08', 'Ninguna', 'Ninguna'),
(2, '2002-02-01', 'Ninguna', 'Ninguna'),
(3, '2017-05-04', '', ''),
(4, '2017-05-10', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_medica`
--

CREATE TABLE `atencion_medica` (
  `id_atencion_medica` int(4) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `id_servicio` int(4) NOT NULL,
  `id_cita` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `atencion_medica`
--

INSERT INTO `atencion_medica` (`id_atencion_medica`, `fecha_hora`, `descripcion`, `id_servicio`, `id_cita`) VALUES
(1, '2017-05-02 10:00:00', 'Extracción de 4 molares en quirófano', 4, 2),
(2, '2017-05-25 08:00:00', 'Cambio de ligas de los brackets', 9, 1),
(3, '2017-05-02 09:00:00', 'Cambio de ligas de los brackets', 9, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(4) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `nombre` text NOT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `fecha_hora`, `nombre`, `telefono`, `email`) VALUES
(1, '2017-05-23 13:15:00', 'Juan López Gonzalez', NULL, NULL),
(2, '2017-05-02 12:00:00', 'Julia Herrera Nuñez', NULL, NULL),
(3, '2017-04-22 07:00:00', 'Alma Márquez Márquez', NULL, NULL),
(4, '2017-05-02 17:00:00', 'Edith Hernández Gómez ', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id_doctor` int(4) NOT NULL,
  `nombre` text NOT NULL,
  `apellido_materno` text NOT NULL,
  `apellido_paterno` text NOT NULL,
  `genero` text NOT NULL,
  `cedula_profesional` int(8) NOT NULL,
  `especialidad` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `movil` int(10) DEFAULT NULL,
  `estado` text NOT NULL,
  `municipio` text NOT NULL,
  `pais` text NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id_doctor`, `nombre`, `apellido_materno`, `apellido_paterno`, `genero`, `cedula_profesional`, `especialidad`, `email`, `telefono`, `movil`, `estado`, `municipio`, `pais`, `domicilio`, `fecha_nacimiento`) VALUES
(1, 'Javier Joel', 'Júarez', 'Gómez', 'M', 56723490, 'Dentista', 'joe@dentalhouse.mx', 2147483647, 2147483647, 'Guanajuato', 'Irapuato', 'México', 'Guerrero #405', '1890-08-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `id_expediente` int(4) NOT NULL,
  `nombre` text NOT NULL,
  `apellido_materno` text NOT NULL,
  `apellido_paterno` text NOT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `movil` bigint(10) DEFAULT NULL,
  `domicilio` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` text NOT NULL,
  `estado` text NOT NULL,
  `municipio` text NOT NULL,
  `pais` text NOT NULL,
  `grupo_sanguineo` varchar(3) NOT NULL,
  `id_doctor` int(4) NOT NULL,
  `id_atencion_medica` int(4) NOT NULL,
  `id_antecedente` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expediente`
--

INSERT INTO `expediente` (`id_expediente`, `nombre`, `apellido_materno`, `apellido_paterno`, `telefono`, `movil`, `domicilio`, `fecha_nacimiento`, `genero`, `estado`, `municipio`, `pais`, `grupo_sanguineo`, `id_doctor`, `id_atencion_medica`, `id_antecedente`) VALUES
(2, 'Erik', 'Castillo', 'Hernández', 4626247062, 4625097508, 'Cobos, Zamora 1381', '1995-01-24', 'M', 'Guanajuato', 'Irapuato', 'México', 'O+', 1, 3, 2),
(3, 'Erik', 'Castillo', 'Hernández', 4626247062, 4625097508, 'Cobos, Zamora 1381', '1995-01-24', 'M', 'Guanajuato', 'Irapuato', 'México', 'O+', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(4) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `folio` int(12) NOT NULL,
  `id_atencion_medica` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `descripcion`, `folio`, `id_atencion_medica`) VALUES
(1, 'Tomar 1 pastilla de Paracetamol cada 24hr', 3563, 1),
(2, 'Tomar 1 pastilla de Aspirina cada 24hr', 3564, 2),
(3, '', 3565, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(4) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre`) VALUES
(1, 'Ortodoncia'),
(2, 'Blanqueamiento dental'),
(3, 'Liempieza dental'),
(4, 'Extracciones'),
(5, 'Amalgamas'),
(6, 'Porcelanas'),
(7, 'Resinas'),
(8, 'Prótesis'),
(9, 'Brackets'),
(10, 'Caries'),
(11, 'Endodoncia'),
(12, 'Periodoncia'),
(13, 'Cirujía maxilofacial'),
(14, 'Ondotopediatria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedente`
--
ALTER TABLE `antecedente`
  ADD PRIMARY KEY (`id_antecedente`);

--
-- Indices de la tabla `atencion_medica`
--
ALTER TABLE `atencion_medica`
  ADD PRIMARY KEY (`id_atencion_medica`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_cita` (`id_cita`),
  ADD KEY `id_servicio_2` (`id_servicio`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_doctor`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`id_expediente`),
  ADD KEY `id_doctor` (`id_doctor`),
  ADD KEY `id_doctor_2` (`id_doctor`),
  ADD KEY `id_atencion_medica` (`id_atencion_medica`),
  ADD KEY `id_antecedente` (`id_antecedente`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `id_atencion_medica` (`id_atencion_medica`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedente`
--
ALTER TABLE `antecedente`
  MODIFY `id_antecedente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `atencion_medica`
--
ALTER TABLE `atencion_medica`
  MODIFY `id_atencion_medica` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_doctor` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `id_expediente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id_receta` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atencion_medica`
--
ALTER TABLE `atencion_medica`
  ADD CONSTRAINT `foreing-id-cita` FOREIGN KEY (`id_cita`) REFERENCES `cita` (`id_cita`),
  ADD CONSTRAINT `foreing-id-servicio` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`);

--
-- Filtros para la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD CONSTRAINT `foreing_id_antecedente` FOREIGN KEY (`id_antecedente`) REFERENCES `antecedente` (`id_antecedente`),
  ADD CONSTRAINT `foreing_id_atencion-medica` FOREIGN KEY (`id_atencion_medica`) REFERENCES `atencion_medica` (`id_atencion_medica`),
  ADD CONSTRAINT `foreing_id_doctor` FOREIGN KEY (`id_doctor`) REFERENCES `doctor` (`id_doctor`);

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `foreingid-atencion-medica` FOREIGN KEY (`id_atencion_medica`) REFERENCES `atencion_medica` (`id_atencion_medica`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
