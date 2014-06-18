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

-- Volcando estructura de base de datos para jobsearch
DROP DATABASE IF EXISTS `jobsearch`;
CREATE DATABASE IF NOT EXISTS `jobsearch` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jobsearch`;


-- Volcando estructura para tabla jobsearch.accesses
DROP TABLE IF EXISTS `accesses`;
CREATE TABLE IF NOT EXISTS `accesses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `latitud` decimal(10,6) DEFAULT NULL,
  `longitud` decimal(10,6) DEFAULT NULL,
  `dispositivo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_accesses_users1_idx` (`user_id`),
  CONSTRAINT `fk_accesses_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.accesses: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `accesses` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesses` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.areas
DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.areas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id`, `name`, `created`, `modified`, `created_by`, `modified_by`, `active`) VALUES
	(1, 'Industria/AdministraciÃ³n', '2014-06-09 06:56:54', '2014-06-09 06:56:54', 1, 1, 1),
	(2, 'Bancos/Finanzas', '2014-06-09 06:57:01', '2014-06-09 06:57:01', 1, 1, 1),
	(3, 'Operacion/Soporte tecnico', '2014-06-17 17:39:58', '2014-06-17 17:39:59', 1, 1, 1);
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.areas_jobs
DROP TABLE IF EXISTS `areas_jobs`;
CREATE TABLE IF NOT EXISTS `areas_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `area_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_areas_jobs_areas` (`area_id`),
  KEY `FK_areas_jobs_jobs` (`job_id`),
  CONSTRAINT `FK_areas_jobs_areas` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_areas_jobs_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.areas_jobs: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `areas_jobs` DISABLE KEYS */;
INSERT INTO `areas_jobs` (`id`, `created`, `modified`, `created_by`, `modified_by`, `active`, `area_id`, `job_id`) VALUES
	(1, NULL, NULL, NULL, NULL, 1, 1, 1),
	(2, NULL, NULL, NULL, NULL, 1, 2, 2);
/*!40000 ALTER TABLE `areas_jobs` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.cities
DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cities_countries1_idx` (`country_id`),
  CONSTRAINT `fk_cities_countries1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.cities: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`, `country_id`) VALUES
	(1, 'San Salvador', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(2, 'San Miguel', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(3, 'Santa Ana', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(4, 'UsulutÃ¡n', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(5, 'AhuachapÃ¡n', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(6, 'La UniÃ³n', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(7, 'MorazÃ¡n', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1),
	(8, 'La Paz', 1, '2014-06-07 13:48:50', '2014-06-07 13:48:50', 1, 1, 1);
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.companies
DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.companies: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` (`id`, `name`, `active`, `address`, `phone`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 'GDS', 1, 'Avenida Las Camelias y Calle Los CastaÃ±os', '2562-5116', '2014-06-05 16:17:39', '2014-06-07 22:11:40', 1, 1);
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_contacts_companies_idx` (`company_id`),
  CONSTRAINT `fk_contacts_companies` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.contacts: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `created`, `modified`, `created_by`, `modified_by`, `company_id`, `active`) VALUES
	(1, 'Monica Elizabeth Argueta de Paz', NULL, '7729-0437', '2014-06-09 06:59:18', '2014-06-09 06:59:18', 1, 1, 1, 1);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.contracts
DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.contracts: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `contracts` DISABLE KEYS */;
INSERT INTO `contracts` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 'Tiempo completo', 1, '2014-06-09 06:58:33', '2014-06-09 06:58:33', 1, 1),
	(2, 'Medio tiempo', 1, '2014-06-09 06:58:42', '2014-06-09 06:58:42', 1, 1);
/*!40000 ALTER TABLE `contracts` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.contracts_jobs
DROP TABLE IF EXISTS `contracts_jobs`;
CREATE TABLE IF NOT EXISTS `contracts_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contracts_jobs_jobs1_idx` (`job_id`),
  KEY `fk_contracts_jobs_contracts1_idx` (`contract_id`),
  CONSTRAINT `fk_contracts_jobs_contracts1` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_contracts_jobs_jobs1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.contracts_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contracts_jobs` DISABLE KEYS */;
INSERT INTO `contracts_jobs` (`id`, `job_id`, `contract_id`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 1, 2, NULL, NULL, NULL, NULL),
	(2, 2, 2, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `contracts_jobs` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.countries: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 'El Salvador', 1, '2014-06-05 23:12:19', '2014-06-05 23:12:19', NULL, NULL),
	(2, 'Guatemala', 1, '2014-06-09 01:19:24', '2014-06-09 01:19:24', 1, 1);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.experiences
DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.experiences: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, '4 aÃ±o', 1, '2014-06-09 06:57:37', '2014-06-09 06:57:37', 1, 1),
	(2, 'Graduado', 1, '2014-06-09 06:57:45', '2014-06-09 06:57:45', 1, 1),
	(3, '1 aÃ±o de experiencia', 1, '2014-06-09 06:57:54', '2014-06-09 06:57:54', 1, 1);
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.experiences_jobs
DROP TABLE IF EXISTS `experiences_jobs`;
CREATE TABLE IF NOT EXISTS `experiences_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_experiences_jobs_jobs` (`job_id`),
  KEY `FK_experiences_jobs_experiences` (`experience_id`),
  CONSTRAINT `FK_experiences_jobs_experiences` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_experiences_jobs_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.experiences_jobs: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `experiences_jobs` DISABLE KEYS */;
INSERT INTO `experiences_jobs` (`id`, `job_id`, `experience_id`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 1, 3, 1, NULL, NULL, NULL, NULL),
	(2, 2, 1, 1, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `experiences_jobs` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.groups: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 'Usuario', 1, NULL, '2014-06-09 06:55:55', NULL, 1),
	(2, 'Administrador', 1, NULL, '2014-06-09 06:56:00', NULL, 1);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.industries
DROP TABLE IF EXISTS `industries`;
CREATE TABLE IF NOT EXISTS `industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.industries: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `industries` DISABLE KEYS */;
INSERT INTO `industries` (`id`, `name`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 'AdministraciÃ³n', 1, '2014-06-08 23:59:36', '2014-06-09 01:28:18', NULL, 1),
	(2, 'Transporte', 1, '2014-06-09 01:18:59', '2014-06-09 06:13:40', 1, 1),
	(3, 'Salud y ciencia', 1, '2014-06-09 01:30:56', '2014-06-09 01:34:52', 1, 1);
/*!40000 ALTER TABLE `industries` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.industries_jobs
DROP TABLE IF EXISTS `industries_jobs`;
CREATE TABLE IF NOT EXISTS `industries_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `industry_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_industries_jobs_industries1_idx` (`industry_id`),
  KEY `fk_industries_jobs_jobs1_idx` (`job_id`),
  CONSTRAINT `fk_industries_jobs_industries1` FOREIGN KEY (`industry_id`) REFERENCES `industries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_industries_jobs_jobs1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.industries_jobs: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `industries_jobs` DISABLE KEYS */;
INSERT INTO `industries_jobs` (`id`, `industry_id`, `job_id`, `active`, `created`, `modified`, `created_by`, `modified_by`) VALUES
	(1, 3, 1, 1, NULL, NULL, NULL, NULL),
	(2, 1, 2, 1, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `industries_jobs` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `company_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `content` text,
  `skills` text,
  `salary` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `tags` text,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_jobs_companies1_idx` (`company_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `FK_jobs_cities` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jobs_companies1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.jobs: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id`, `name`, `company_id`, `city_id`, `content`, `skills`, `salary`, `created`, `modified`, `created_by`, `modified_by`, `tags`, `active`) VALUES
	(1, 'Analista programador', 1, 1, '<p>&quot;Lorem ipsum dolor sit amet, <span style="background-color:#FF8C00">consectetur adipisicing eli</span>t, sed do e<span style="color:#0000FF">iusmod tempor incididunt ut labo</span>re et <span class="marker">dolore magna aliqua</span>. Ut enim ad minim veniam, quis <em>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</em> pariatur. Excepteur sint occaecat cupidatat non proident, sunt in cu<strong>lpa qui officia deserunt mollit anim id est laborum</strong></p>\r\n', 'Ingles,uso de computadora,extrovertido, mandarin, responsable', 0.00, '2014-06-09 07:03:48', '2014-06-09 07:29:35', 1, 1, 'ComputaciÃ³n,economÃ­a,programador', 1),
	(2, 'Gerente financiero', 1, 3, '<p><code>My application was running out of memory (my hosting company limits PHP to 32MB).&nbsp; I have a <span style="color:#40E0D0"><strong>string containing between 100 and 20000 triplets, separated by a space, with each triplet consisting of three double-precision numbers, separated by commas.&nbsp; Total size of the biggest string, with 20000 triplets, is about 1MB.</strong></span></code></p>\r\n', 'uno,dos,tres', 0.00, '2014-06-09 08:39:06', '2014-06-09 08:40:28', 1, 1, 'Finanzas,economÃ­a,naturales,gds', 1);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.jobs_users
DROP TABLE IF EXISTS `jobs_users`;
CREATE TABLE IF NOT EXISTS `jobs_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jobs_users_users1_idx` (`user_id`),
  KEY `fk_jobs_users_jobs1_idx` (`job_id`),
  CONSTRAINT `fk_jobs_users_jobs1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_jobs_users_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.jobs_users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `jobs_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs_users` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.subscriptions
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `tag_id` (`tag_id`),
  CONSTRAINT `FK_subscriptions_tags` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_subscriptions_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.subscriptions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.tags
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.tags: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;


-- Volcando estructura para tabla jobsearch.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `carnet` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla jobsearch.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `carnet`, `phone`, `active`, `created`, `modified`, `created_by`, `modified_by`, `group_id`) VALUES
	(1, 'Jorge Mariano Paz Flores', 'mariano.paz.flores@gmail.com', 'cc622124d8e78d6943c9b63f4e4dc2773a956be2', '123456', '77290437', 1, '2014-06-09 01:15:07', '2014-06-09 01:15:07', 1, 1, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
