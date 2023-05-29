/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50734 (5.7.34)
 Source Host           : localhost:3306
 Source Schema         : rasyid

 Target Server Type    : MySQL
 Target Server Version : 50734 (5.7.34)
 File Encoding         : 65001

 Date: 29/05/2023 14:50:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agama
-- ----------------------------
DROP TABLE IF EXISTS `agama`;
CREATE TABLE `agama` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agama
-- ----------------------------
BEGIN;
INSERT INTO `agama` (`id`, `nama`) VALUES (1, 'islam');
INSERT INTO `agama` (`id`, `nama`) VALUES (2, '8uiojkl1');
COMMIT;

-- ----------------------------
-- Table structure for desa
-- ----------------------------
DROP TABLE IF EXISTS `desa`;
CREATE TABLE `desa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of desa
-- ----------------------------
BEGIN;
INSERT INTO `desa` (`id`, `nama`) VALUES (2, 'Kelayan Barat');
COMMIT;

-- ----------------------------
-- Table structure for kelahiran
-- ----------------------------
DROP TABLE IF EXISTS `kelahiran`;
CREATE TABLE `kelahiran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kk` varchar(255) DEFAULT NULL,
  `nama_bayi` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pelapor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kelahiran
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kematian
-- ----------------------------
DROP TABLE IF EXISTS `kematian`;
CREATE TABLE `kematian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pelapor` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tanggal_meninggal` date DEFAULT NULL,
  `nik_meninggal` varchar(255) DEFAULT NULL,
  `nama_meninggal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `penyebab` varchar(255) DEFAULT NULL,
  `hubungan` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kematian
-- ----------------------------
BEGIN;
INSERT INTO `kematian` (`id`, `pelapor`, `tanggal`, `tanggal_meninggal`, `nik_meninggal`, `nama_meninggal`, `created_at`, `updated_at`, `penyebab`, `hubungan`, `jkel`) VALUES (3, 'oiu', NULL, '2023-05-29', 'oiuoi', 'uoiu', '2023-05-29 14:50:25', '2023-05-29 14:50:25', 'oiu', 'oiu', 'oiu');
COMMIT;

-- ----------------------------
-- Table structure for lahir
-- ----------------------------
DROP TABLE IF EXISTS `lahir`;
CREATE TABLE `lahir` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nik_pelapor` varchar(255) DEFAULT NULL,
  `nama_pelapor` varchar(255) DEFAULT NULL,
  `nik_ayah` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nik_ibu` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_kk` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `nama_bayi` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lahir
-- ----------------------------
BEGIN;
INSERT INTO `lahir` (`id`, `tanggal`, `nik_pelapor`, `nama_pelapor`, `nik_ayah`, `nama_ayah`, `nik_ibu`, `nama_ibu`, `created_at`, `updated_at`, `no_kk`, `tanggal_lahir`, `nama_bayi`, `jkel`) VALUES (3, '2023-05-29', 'kjhkjh', 'kjh', 'khkj', 'hkj', 'hkj', 'hkjh', '2023-05-29 13:04:06', '2023-05-29 13:06:08', '243567786543', '2023-05-30', 'jkh', 'lkh');
COMMIT;

-- ----------------------------
-- Table structure for nikah
-- ----------------------------
DROP TABLE IF EXISTS `nikah`;
CREATE TABLE `nikah` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nik_pelapor` varchar(255) DEFAULT NULL,
  `nama_pelapor` varchar(255) DEFAULT NULL,
  `nik_pria` varchar(255) DEFAULT NULL,
  `nama_pria` varchar(255) DEFAULT NULL,
  `nik_wanita` varchar(255) DEFAULT NULL,
  `nama_wanita` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nikah
-- ----------------------------
BEGIN;
INSERT INTO `nikah` (`id`, `tanggal`, `nik_pelapor`, `nama_pelapor`, `nik_pria`, `nama_pria`, `nik_wanita`, `nama_wanita`, `created_at`, `updated_at`) VALUES (2, '2023-05-16', '1kjh', 'kjh1', 'kjhkjh1', '1kjh', 'kj1', 'hkj1', '2023-05-29 12:50:26', '2023-05-29 12:52:05');
COMMIT;

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pendidikan
-- ----------------------------
BEGIN;
INSERT INTO `pendidikan` (`id`, `nama`) VALUES (1, 'SD');
COMMIT;

-- ----------------------------
-- Table structure for penduduk
-- ----------------------------
DROP TABLE IF EXISTS `penduduk`;
CREATE TABLE `penduduk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama_id` int(11) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `kawin` varchar(255) DEFAULT NULL,
  `status_keluarga` varchar(255) DEFAULT NULL,
  `warga_negara` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `status_penduduk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `pendidikan_id` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rt` varchar(255) DEFAULT NULL,
  `rw` varchar(255) DEFAULT NULL,
  `no` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penduduk
-- ----------------------------
BEGIN;
INSERT INTO `penduduk` (`id`, `nama`, `kk`, `nik`, `jkel`, `tempat_lahir`, `tanggal_lahir`, `agama_id`, `pekerjaan`, `kawin`, `status_keluarga`, `warga_negara`, `nama_ayah`, `nama_ibu`, `status_penduduk`, `created_at`, `updated_at`, `desa_id`, `pendidikan_id`, `alamat`, `rt`, `rw`, `no`, `kecamatan`) VALUES (2, '8uiojkl1', '1111', '8790hdsf', 'L', '1ijhjkh', '2023-05-29', 1, 't8yuihjk', 'kjhb', '--kjh', '456789', '4567890', '7890-', '890', '2023-05-29 01:37:52', '2023-05-29 01:43:10', 2, 1, 'kj', 'jkh', 'kjh', 'kjh', 'kjhkjh');
COMMIT;

-- ----------------------------
-- Table structure for pengajuan
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan`;
CREATE TABLE `pengajuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengajuan
-- ----------------------------
BEGIN;
INSERT INTO `pengajuan` (`id`, `nama`) VALUES (1, 'nikah');
INSERT INTO `pengajuan` (`id`, `nama`) VALUES (2, 'kelahiran');
INSERT INTO `pengajuan` (`id`, `nama`) VALUES (3, 'kematian');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'pemohon', '2022-10-19 14:20:54', '2022-10-19 14:20:54');
COMMIT;

-- ----------------------------
-- Table structure for usaha
-- ----------------------------
DROP TABLE IF EXISTS `usaha`;
CREATE TABLE `usaha` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `jenis_usaha` varchar(255) DEFAULT NULL,
  `tujuan_usaha` text,
  `alamat_usaha` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usaha
-- ----------------------------
BEGIN;
INSERT INTO `usaha` (`id`, `nik`, `pemilik`, `nama_usaha`, `jenis_usaha`, `tujuan_usaha`, `alamat_usaha`, `created_at`, `updated_at`) VALUES (2, 'kjh', 'kjh', 'kjh', 'kjhkj', 'hjkh', 'kjh', '2023-05-29 13:46:50', '2023-05-29 13:46:50');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`) VALUES (1, 'superadmin', NULL, 'superadmin', '2022-11-07 00:40:59', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2022-11-07 00:40:59', '2022-11-06 16:40:59', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
