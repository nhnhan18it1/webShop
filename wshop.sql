/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : wshop

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 10/12/2019 22:14:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dob` date NULL DEFAULT NULL,
  `Phone` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Addresss` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (1, '109955224014270866575', NULL, 'nhan nguyen', NULL, NULL, NULL, 'nhavbnm@gmail.com', 'ND', NULL, '2019-10-17 14:50:42', '2019-10-17 14:50:42');
INSERT INTO `account` VALUES (2, 'nhavbnm', '$2y$10$asyrIGLbjuE.9av/iNnCKOV0y0GTeXB1EsJaiqKVAb85NPwdcf4dG', 'nhandz', NULL, NULL, NULL, 'nhavvbnm@gmail.com', 'SHOP', NULL, NULL, '2019-10-31 15:58:41');
INSERT INTO `account` VALUES (3, 'nhavbnm1', '$2y$10$AgMyh0ew43pY8zH58OQVvOv3oeo/Te2EEpxoua7Fz597wJXBk51QC', 'nhaas', NULL, NULL, NULL, NULL, 'SHOP', NULL, '2019-10-31 17:14:14', '2019-10-31 17:14:14');
INSERT INTO `account` VALUES (4, '114768323697394707854', NULL, 'Nguyen Nhan', NULL, NULL, NULL, 'nhavbnm1@gmail.com', 'ND', NULL, '2019-11-03 14:08:54', '2019-11-03 14:08:54');
INSERT INTO `account` VALUES (6, 'nhavbnmx', '$2y$10$gx0W3wJvI5nFxAbocsbPmuSZGA9XwIwtBfk.2hfjbN29ZAEXQLJXq', 'nhandz', '2019-11-14', '0339898292', NULL, 'nhnhan.18it1@sict.udn.vn', 'ND', NULL, '2019-11-03 15:55:55', '2019-11-03 15:55:55');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_10_15_073604_create_account', 1);
INSERT INTO `migrations` VALUES (5, '2019_10_15_073651_create_product', 1);
INSERT INTO `migrations` VALUES (6, '2019_10_15_165725_create_product_detail', 1);
INSERT INTO `migrations` VALUES (7, '2019_10_15_171425_create_order', 1);

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IDSP` bigint(20) NOT NULL,
  `IDND` bigint(20) NOT NULL,
  `Count` int(11) NOT NULL,
  `Price` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (1, 1, 1, 1, 9999, '2019-11-04 09:43:00', '2019-11-04 09:43:00');
INSERT INTO `order` VALUES (2, 1, 1, 1, 9999, '2019-11-04 09:44:17', '2019-11-04 09:44:17');
INSERT INTO `order` VALUES (3, 2, 1, 3, 156156, '2019-11-04 09:44:17', '2019-11-04 09:44:17');
INSERT INTO `order` VALUES (4, 1, 1, 1, 9999, '2019-11-04 09:44:32', '2019-11-04 09:44:32');
INSERT INTO `order` VALUES (5, 2, 1, 3, 156156, '2019-11-04 09:44:32', '2019-11-04 09:44:32');
INSERT INTO `order` VALUES (6, 3, 1, 1, NULL, '2019-11-04 09:44:32', '2019-11-04 09:44:32');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `Type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `IDShop` bigint(20) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'test11', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_1.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (2, 'test12', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_2.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (3, 'test13', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_3.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (4, 'test14', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_4.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (5, 'test15', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_5.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (6, 'test16', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_6.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (7, 'test17', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_7.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (8, 'test18', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_8.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (9, 'test19', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_9.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (10, 'test110', 'asasd', 'normal', '/Wshop2/local/public/ProductImg/category_10.png', 2, '2019-10-23 01:27:58', '2019-10-23 01:27:58');
INSERT INTO `product` VALUES (15, 'nhandz3', '<p>safasf</p>', 'special', '/Wshop2/local/public/ProductImg/category_11.png', 2, '2019-11-02 10:32:55', '2019-11-02 10:32:55');
INSERT INTO `product` VALUES (16, 'ao dai', '<p>phu hop voi nhieu kich yhuoc</p>\r\n\r\n<p>t&ocirc;n voc d&aacute;ng</p>', 'special', '/Wshop2/local/public/ProductImg/category_12.png', 2, '2019-11-02 13:33:32', '2019-11-02 13:33:32');
INSERT INTO `product` VALUES (17, 'adxcc', '<p>dtx</p>\r\n\r\n<p>jvjvu</p>', 'normal', '/Wshop2/local/public/ProductImg/category_13.png', 2, '2019-11-05 07:20:09', '2019-11-05 07:20:09');

-- ----------------------------
-- Table structure for product_detail
-- ----------------------------
DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE `product_detail`  (
  `ID` int(11) NOT NULL,
  `Size` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(255) NULL DEFAULT NULL,
  `Count` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_detail
-- ----------------------------
INSERT INTO `product_detail` VALUES (1, 'S', 'red', 9999, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (1, 'M', 'red', 99999, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (1, 'L', 'red', 999999, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (1, 'XL', 'red', 9999, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (2, 'S', 'red', 156156, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (2, 'M', 'red', 1216516, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (2, 'L', 'red', 54184561, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (2, 'XL', 'red', 56148, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (3, 'S', 'red', NULL, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (3, 'M', 'red', 56468416, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (3, 'L', 'red', 641846, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (3, 'XL', 'red', 564154165, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (4, 'S', 'red', 46846515, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (4, 'M', 'red', 56485468, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (4, 'L', 'red', 468468, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (4, 'XL', 'red', 4654846, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (5, 'S', 'red', 5486451, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (5, 'M', 'red', 2147483647, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (5, 'L', 'red', 8646845, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (5, 'XL', 'red', 54648665, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (6, 'S', 'red', 54864686, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (6, 'M', 'red', 468468, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (6, 'L', 'red', 546546, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (6, 'XL', 'red', 54, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (7, 'S', 'red', 4, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (7, 'M', 'red', 5, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (7, 'L', 'red', 84846, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (7, 'XL', 'red', 846854, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (8, 'S', 'red', 5, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (8, 'M', 'red', 564, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (8, 'L', 'red', 84, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (8, 'XL', 'red', 684, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (9, 'S', 'red', 468, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (9, 'M', 'red', 485, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (9, 'L', 'red', 468, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (9, 'XL', 'red', 854, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (10, 'S', 'red', 4, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (10, 'M', 'red', 85485, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (10, 'L', 'red', 4854, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (10, 'XL', 'red', 4, 15, '2019-10-23 14:23:32', '2019-10-23 14:23:32');
INSERT INTO `product_detail` VALUES (15, 'S', 'red', 1, 1, '2019-11-02 10:32:55', '2019-11-02 10:32:55');
INSERT INTO `product_detail` VALUES (16, 'S', 'red', 555555, 5, '2019-11-02 13:33:32', '2019-11-02 13:33:32');
INSERT INTO `product_detail` VALUES (17, 'S', 'red', 300, 5, '2019-11-05 07:20:09', '2019-11-05 07:20:09');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
