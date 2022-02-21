-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.6.5-MariaDB-1:10.6.5+maria~focal - mariadb.org binary distribution
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for codeacademy
CREATE DATABASE IF NOT EXISTS `codeacademy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `codeacademy`;

-- Dumping structure for table codeacademy.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `discount_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_discount_id_foreign` (`discount_id`),
  CONSTRAINT `product_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table codeacademy.product: ~0 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `desc`, `sku`, `category`, `price`, `discount_id`, `created_at`, `updated_at`) VALUES
	(1, 'Dell Inspiron 5548', '15 inch laptop', '123', 'Laptop', 1145.00, NULL, '2022-02-21 12:26:51', '2022-02-21 12:26:54'),
	(2, 'Zephyrus G14', '14 inch gaming laptop', '456', 'Laptop', 1847.00, NULL, '2022-02-21 12:27:52', NULL),
	(3, 'Apple MacBook Air', '13 inch laptop', '789', 'Laptop', 999.00, NULL, '2022-02-21 13:26:06', NULL),
	(4, 'Apple MacBook Pro', '15 inch laptop', '321', 'Laptop', 2150.00, NULL, '2022-02-21 13:26:47', NULL),
	(5, 'Asus VivoBook', '15 inch laptop', '654', 'Laptop', 1348.00, NULL, '2022-02-21 13:27:23', NULL),
	(6, 'HP Spectre', '13 inch ultrabook', '987', 'Laptop', 1999.00, NULL, '2022-02-21 13:28:46', NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
