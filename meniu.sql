-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `meniu`;
CREATE TABLE `meniu` (
  `id` int(2) NOT NULL,
  `opt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `meniu` (`id`, `opt`) VALUES
(1,	'Introducere'),
(2,	'Vizualizari'),
(3,	'Tiparire'),
(4,	'Actualizari');

-- 2015-09-18 07:22:50
