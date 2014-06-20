-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.16 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4781
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para ccesen
DROP DATABASE IF EXISTS `ccesen`;
CREATE DATABASE IF NOT EXISTS `ccesen` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ccesen`;


-- Volcando estructura para tabla ccesen.alumni_npe_solicitar
DROP TABLE IF EXISTS `alumni_npe_solicitar`;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla ccesen.alumni_npe_solicitar: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `alumni_npe_solicitar` DISABLE KEYS */;
INSERT INTO `alumni_npe_solicitar` (`id`, `carnet`, `nombre`, `apellidos`, `email`, `dir_envio`, `fecha_solicitud`, `fecha_vencimi`, `npe`, `estado_npe`, `fecha_pago_npe`, `url_img`, `est_estrega`) VALUES
	(1, '20062643', 'Elia Xiomara Cecilia', 'Campos Gonzalez', 'eliacamposg@gmail.com', 'Avenida El Espino entre Boulevard Sur y Calle El Almendro Ur', '2014-06-07', '0000-00-00', '4189-0002-0002-0062-6432-0140-6070-6068', 1, '2014-06-07 16:20:42', '/uploads/20062643.jpg', 0),
	(2, '20143081', 'Claudia Elizabeth', 'Arteaga Montano', 'claudia@gmail.com', 'apastepeque la libertas', '2014-06-07', '0000-00-00', '4189-0002-0002-0040-8512-0140-6190-6069', 1, '2014-06-10 00:00:00', '/uploads/20040851.jpg', 0);
/*!40000 ALTER TABLE `alumni_npe_solicitar` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
