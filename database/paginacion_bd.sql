# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Base de datos: paginacion
# Tiempo de Generación: 2021-02-10 13:27:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla paginacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paginacion`;

CREATE TABLE `paginacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `articulos` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `paginacion` WRITE;
/*!40000 ALTER TABLE `paginacion` DISABLE KEYS */;

INSERT INTO `paginacion` (`id`, `articulos`)
VALUES
	(1,'Lorem ipsum dolor sit amet consectetur adipisicing elit porttitor mauris. '),
	(2,'Perspiciatis eveniet in harum ut fugiat aspernatur dignissimos autem excepturi.'),
	(3,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. '),
	(4,'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.'),
	(5,'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. '),
	(6,'Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate.'),
	(7,'Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.'),
	(8,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit consectetuer adipiscing elit.'),
	(9,'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Accumsan porttitor, facilisis luctus, metus.'),
	(10,'Integer vitae libero ac risus egestas placerat. Vestibulum commodo felis quis tortor.'),
	(11,'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.'),
	(12,'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non.'),
	(13,'Donec nec justo eget felis facilisis fermentum aliquam sit amet orci.'),
	(14,'Vestibulum commodo felis quis tortor. Donec quis dui at dolor tempor interdum.'),
	(15,'Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. Vestibulum commodo felis quis tortor.'),
	(16,'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.'),
	(17,'Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae. '),
	(18,'Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.'),
	(19,'Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.'),
	(20,'Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.');

/*!40000 ALTER TABLE `paginacion` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
