-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2014 a las 18:23:12
-- Versión del servidor: 5.1.69
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ccesen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumni_npe_solicitar`
--

CREATE TABLE IF NOT EXISTS `alumni_npe_solicitar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carnet` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dir_envio` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `fecha_vencimi` date NOT NULL,
  `npe` varchar(41) COLLATE utf8_unicode_ci NOT NULL,
  `estado_npe` int(11) NOT NULL,
  `fecha_pago_npe` datetime NOT NULL,
  `url_img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `est_estrega` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alumni_npe_solicitar`
--

INSERT INTO `alumni_npe_solicitar` (`id`, `carnet`, `nombre`, `apellidos`, `email`, `dir_envio`, `fecha_solicitud`, `fecha_vencimi`, `npe`, `estado_npe`, `fecha_pago_npe`, `url_img`, `est_estrega`) VALUES
(1, '20062643', 'Elia Xiomara Cecilia', 'Campos Gonzalez', 'eliacamposg@gmail.com', 'Avenida El Espino entre Boulevard Sur y Calle El Almendro Ur', '2014-06-07', '0000-00-00', '4189-0002-0002-0062-6432-0140-6070-6068', 1, '2014-06-07 16:20:42', '/uploads/20062643.jpg', 0),
(2, '20143081', 'Claudia Elizabeth', 'Arteaga Montano', 'claudia@gmail.com', 'apastepeque la libertas', '2014-06-07', '0000-00-00', '4189-0002-0002-0040-8512-0140-6190-6069', 1, '2014-06-10 00:00:00', '/uploads/20040851.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
