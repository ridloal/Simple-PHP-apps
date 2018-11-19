-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mitla
DROP DATABASE IF EXISTS `mitla`;
CREATE DATABASE IF NOT EXISTS `mitla` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mitla`;

-- Dumping structure for table mitla.film
DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table mitla.film: ~8 rows (approximately)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`film_id`, `nama`) VALUES
	(1, 'Anonimus'),
	(2, 'Kursi kosong'),
	(3, 'Sapu belah tengah'),
	(4, 'Oh tidak'),
	(5, 'Hantu meja reyot'),
	(6, 'Dendam menahun'),
	(7, 'Semua salah'),
	(8, 'The XXX folder');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Dumping structure for table mitla.label
DROP TABLE IF EXISTS `label`;
CREATE TABLE IF NOT EXISTS `label` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`label_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mitla.label: ~3 rows (approximately)
/*!40000 ALTER TABLE `label` DISABLE KEYS */;
INSERT INTO `label` (`label_id`, `nama`) VALUES
	(1, 'Horor'),
	(2, 'Komedi'),
	(3, 'Drama');
/*!40000 ALTER TABLE `label` ENABLE KEYS */;

-- Dumping structure for table mitla.label_film
DROP TABLE IF EXISTS `label_film`;
CREATE TABLE IF NOT EXISTS `label_film` (
  `label_film_id` int(11) NOT NULL AUTO_INCREMENT,
  `label_id` int(11) DEFAULT NULL,
  `film_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`label_film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table mitla.label_film: ~12 rows (approximately)
/*!40000 ALTER TABLE `label_film` DISABLE KEYS */;
INSERT INTO `label_film` (`label_film_id`, `label_id`, `film_id`) VALUES
	(1, 1, 2),
	(2, 2, 3),
	(3, 3, 4),
	(4, 1, 5),
	(5, 2, 5),
	(6, 1, 6),
	(7, 3, 6),
	(8, 2, 7),
	(9, 3, 7),
	(10, 1, 8),
	(11, 2, 8),
	(12, 3, 8);
/*!40000 ALTER TABLE `label_film` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
