-- Adminer 5.1.1 MySQL 8.0.43-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(8,	'ss',	'sss@gmail.com',	'22222222',	'08956485620'),
(11,	'Sajid',	'sssi@gmail.com',	'11111111',	'09328500920');

-- 2025-08-22 10:39:17 UTC
