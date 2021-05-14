-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-05-2021 a las 23:04:11
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `units` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `publish_date` datetime DEFAULT NULL,
  `publish` tinyint(1) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discipline_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `discipline_id` (`discipline_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  `education_level_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `education_level_id` (`education_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education_level`
--

DROP TABLE IF EXISTS `education_level`;
CREATE TABLE IF NOT EXISTS `education_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `path` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(120) COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_id_2` (`course_id`),
  UNIQUE KEY `unit_id_2` (`unit_id`),
  KEY `course_id` (`course_id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `student_id` int(11) NOT NULL,
  `courde_id` int(11) NOT NULL,
  `pay` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `courde_id` (`courde_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `surname` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `country` varchar(3) COLLATE latin1_spanish_ci NOT NULL,
  `location` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `entry` datetime NOT NULL,
  `email` varchar(120) CHARACTER SET latin1 NOT NULL,
  `pass` tinytext CHARACTER SET latin1 NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `surname` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `country` varchar(3) CHARACTER SET latin1 NOT NULL,
  `location` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `entry` datetime NOT NULL,
  `email` varchar(120) CHARACTER SET latin1 NOT NULL,
  `pass` tinytext CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `title` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `course_id` (`course_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video_class`
--

DROP TABLE IF EXISTS `video_class`;
CREATE TABLE IF NOT EXISTS `video_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `link` text COLLATE latin1_spanish_ci NOT NULL,
  `live_class` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  KEY `unit_id` (`unit_id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `file_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `unit_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `video_class`
--
ALTER TABLE `video_class`
  ADD CONSTRAINT `video_class_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `video_class_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `video_class_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
