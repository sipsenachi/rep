-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `smeniu`;
CREATE TABLE `smeniu` (
  `id` int(2) NOT NULL,
  `snume` varchar(35) NOT NULL,
  `leg` varchar(15) NOT NULL,	
  `m_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `smeniu` (`id`, `snume`,`leg`,`m_id`) VALUES
(1,	'Incasari'	,'inc.php'	,1),
(2,	'Inregistrari','reg.php',	1),
(3,	'Cereri imprumut','cer.php',1),
(4,	'Ajutor deces','ajd.php',1),
(5,	'Nota contabila','nc.php',1),
(6,	'Extras de cont','ex.php',1),
(7,	'Retrageri','ret.php',1),
(8,	'Prescrieri','pr.php',1),
(9,	'Partide','v_par.php',2),
(10,    'Fisa partidei','v_fp.php',2),
(11,	'Incasari zilnice','v_inc_z.php',2),
(12,    'Cereri imprumut','v_cr.php',2),
(13,	'Incasari','v_inc.php',2),
(14,	'Ajutor deces','v_ajd.php',2),
(15,	'Retrageri','v_ret.php',2),
(16,	'Extras cont','v_ex.php',2),
(17,	'Note compensare','v_nc.php',2),
(18,	'Prescriere fonduri','v_pr.php',2),
(20,	'Centralizator sintetic','v_cs.php',2),
(21,	'Situatia imprumuturilor','v_simp.php',2),
(22,	'Situatia debitorilor','v_sdeb.php',2);




-- 2015-09-18 07:22:50
