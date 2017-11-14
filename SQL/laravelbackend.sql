/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 100128
Source Host           : localhost:3306
Source Database       : laravelbackend

Target Server Type    : MYSQL
Target Server Version : 100128
File Encoding         : 65001

Date: 2017-11-14 08:34:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for discounts
-- ----------------------------
DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `min` double NOT NULL,
  `max` double NOT NULL,
  `discount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of discounts
-- ----------------------------
INSERT INTO `discounts` VALUES ('2', '112', '115', '0.25', '2017-11-13 21:22:13', '2017-11-13 21:22:18');
INSERT INTO `discounts` VALUES ('3', '116', '2500000', '0.5', '2017-11-13 21:22:57', '2017-11-13 21:23:01');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_11_10_080449_create_products_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_11_10_162626_add_user_group_to_users', '2');
INSERT INTO `migrations` VALUES ('7', '2017_11_10_181454_add_image_to_products', '3');
INSERT INTO `migrations` VALUES ('8', '2017_11_10_192840_create_transactions_table', '4');
INSERT INTO `migrations` VALUES ('9', '2017_11_11_185422_adds_api_token_to_users_table', '5');
INSERT INTO `migrations` VALUES ('10', '2017_11_11_185836_adds_api_token_to_users_table', '6');
INSERT INTO `migrations` VALUES ('11', '2017_11_13_191735_create_discounts_table', '7');
INSERT INTO `migrations` VALUES ('12', '2017_11_13_192808_add_discount_products', '8');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('7', 'Apple iPhone 8 64GB', 'Display:- Retina HD display- 4.7-inch (diagonal) widescreen LCD Multi-Touch display with IPS technology- 1334-by-750-pixel resolution at 326 ppi- 1400:1 contrast ratio (typical)True Tone display:- Wide color display (P3)3D Touch:- 625 cd/m2 max', '113', '2017-11-14 06:15:44', '2017-11-14 06:17:50', 'iphone_1510640144.jpg', '0');
INSERT INTO `products` VALUES ('8', 'Hisense 49\" FHD LED TV', 'HiSense HX49M2160NF 49 inch LED Backlit Full High Definition TV, 1920 x 1080 Resolution, Smooth Motion Rate 120Hz, Display Ratio 16:9, 2 x HDMI, 1x USB , 1x D-Sub 15 Pin VGA Connector , Contrast Ratio 4000:1 , Image brightness 200 cd/ , 8ms Response', '5000', '2017-11-14 06:17:36', '2017-11-14 06:17:36', 'tv_1510640256.jpg', '0');
INSERT INTO `products` VALUES ('9', 'Microsoft Office 365', 'Microsoft Office 365 Personal - QQ2-00557Office 365 has the applications you know, always up to date and accessible from virtually anywhere.Office 365 is the same Office you already know and use every day.', '599', '2017-11-14 06:19:32', '2017-11-14 06:24:40', 'office_1510640372.JPG', '0');
INSERT INTO `products` VALUES ('10', 'Canon Powershot SX540', 'Canon Powershot SX540 HSWhat\'s in the box Canon PowerShot SX540 HS Digital Camera NB-6LH Lithium-Ion Battery Pack (3.7V, 1,060mAh) CB-2LY Battery Charger for Canon NB-6L Lithium-Ion Battery Lens Cap with Strap NS-DC11 Neck Strap', '699', '2017-11-14 06:20:36', '2017-11-14 06:20:36', 'noimage.png', '0');
INSERT INTO `products` VALUES ('11', 'DSTV Explora Decoder', 'DStv Explora 2 Excludes Dish and InstallationThe DStv Explora 2 is MultiChoices newest PVR and replaces the DStv Explora. It has all the features on our DStv Explora that our customers have come to love.DStv Explora 2 HD PVR· HD Capable', '1249', '2017-11-14 06:22:50', '2017-11-14 06:22:50', 'dstv_1510640570.jpg', '0');
INSERT INTO `products` VALUES ('12', '4GB USB Flash', 'With its stylish, compact design and generous capacity, the Cruzer Blade USB Flash Drive makes it easy to back up, transfer, and share your files. Available in capacities up to 128GB** , this USB drive lets you carry your photos, movies, music', '30', '2017-11-14 06:24:04', '2017-11-14 06:24:04', 'stick_1510640644.jpg', '0');

-- ----------------------------
-- Table structure for transactions
-- ----------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `amount` double NOT NULL,
  `paymentmethod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of transactions
-- ----------------------------
INSERT INTO `transactions` VALUES ('1', 'Client App Top Up', '1', '200', 'Visa', '29', '2017-11-14 06:08:24', '2017-11-14 06:08:24');
INSERT INTO `transactions` VALUES ('2', 'Test Product 1', '1', '-85', 'Client Wallet', '29', '2017-11-14 06:08:32', '2017-11-14 06:08:32');
INSERT INTO `transactions` VALUES ('3', 'Client App Top Up', '1', '500', 'Visa', '30', '2017-11-14 06:34:30', '2017-11-14 06:34:30');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `groups` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` double NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_api_token_unique` (`api_token`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('28', 'Mr Tester', 'test@test.com', '$2y$10$WRqV7Lou6maIk5jRIaXKEuAm714tthFFt.i9E.nzR6lLAKfRX7kHy', null, '2017-11-14 06:04:11', '2017-11-14 06:04:11', '10', '0', null);
INSERT INTO `users` VALUES ('29', 'Mr Test Client', 'testcleint@test.com', '$2y$10$tgvhl2ZkAlUsF6WH8Asyreha7EvbbDJnm3WhTuWTLZZTg..TAwUd6', null, '2017-11-14 06:07:19', '2017-11-14 06:08:32', '5', '115', null);
INSERT INTO `users` VALUES ('30', 'test2@test.com', 'test2@test.com', '$2y$10$qV.5.jSjK9iUmx5Bh8b05.4/tIpcxafFEmq7el4FkoJNWufNxooUy', null, '2017-11-14 06:34:15', '2017-11-14 06:34:30', '5', '500', null);
