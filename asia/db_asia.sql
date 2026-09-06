/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - asia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`asia` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `asia`;

/*Table structure for table `accounts` */

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `code` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `types` varchar(7) NOT NULL,
  `sn` char(1) DEFAULT NULL,
  `parent` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `accounts` */

insert  into `accounts`(`code`,`name`,`types`,`sn`,`parent`,`created_at`,`updated_at`) values 
(1000,'Aktiva','general',NULL,0,'2025-05-14 11:52:30','2025-05-14 11:52:30'),
(1100,'Aktiva Lancar','general',NULL,1100,'2025-06-04 12:16:02','2025-06-04 12:16:05'),
(1110,'Kas','detail','D',1100,'2025-06-04 06:07:21','2025-06-04 06:07:21'),
(3100,'Modal Abu Hanifah','detail','K',3000,'2025-06-04 12:17:53','2025-06-04 12:17:55');

/*Table structure for table `journal_items` */

DROP TABLE IF EXISTS `journal_items`;

CREATE TABLE `journal_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `journal_id` int(10) unsigned NOT NULL,
  `code` int(10) NOT NULL,
  `debit` double(20,2) NOT NULL,
  `credit` double(20,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `journal_items` */

insert  into `journal_items`(`id`,`journal_id`,`code`,`debit`,`credit`) values 
(1,1,1110,15000000.00,0.00),
(2,1,3100,0.00,15000000.00);

/*Table structure for table `journals` */

DROP TABLE IF EXISTS `journals`;

CREATE TABLE `journals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `journal_type` varchar(100) NOT NULL,
  `transaction_date` date NOT NULL,
  `reff_code` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `journals` */

insert  into `journals`(`id`,`journal_type`,`transaction_date`,`reff_code`,`status`,`created_at`,`updated_at`) values 
(1,'umum','2023-03-03','001',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
