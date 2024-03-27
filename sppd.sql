/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : sppd

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 27/03/2024 09:37:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `nama`) VALUES (1, 'Staf');
INSERT INTO `jabatan` (`id`, `nama`) VALUES (3, 'Kasub1');
COMMIT;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan_id` int(10) unsigned DEFAULT NULL,
  `alamat` text,
  `tingkat` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jabatan_id`, `alamat`, `tingkat`, `golongan`) VALUES (1, '343532134', 'Udin', 1, '1234453', '1', 'pembina I');
INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jabatan_id`, `alamat`, `tingkat`, `golongan`) VALUES (3, '564789', 'rina', 3, 'ghvjbknl', '3', 'A3');
COMMIT;

-- ----------------------------
-- Table structure for pengikut
-- ----------------------------
DROP TABLE IF EXISTS `pengikut`;
CREATE TABLE `pengikut` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sppd_id` int(11) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` text,
  `uang_transport` int(11) DEFAULT NULL,
  `uang_penginapan` int(11) DEFAULT NULL,
  `uang_harian` int(11) DEFAULT NULL,
  `nip_bendahara` varchar(255) DEFAULT NULL,
  `nama_bendahara` varchar(255) DEFAULT NULL,
  `nomor_bukti` varchar(255) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `transfer_ke` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengikut
-- ----------------------------
BEGIN;
INSERT INTO `pengikut` (`id`, `sppd_id`, `nip`, `nama`, `jabatan`, `uang_transport`, `uang_penginapan`, `uang_harian`, `nip_bendahara`, `nama_bendahara`, `nomor_bukti`, `tanggal_bayar`, `transfer_ke`, `created_at`, `updated_at`) VALUES (3, 1, '343532134', 'Udin', 'Staf', 2000000, 2500000, 1300000, '3245365432', 'Sari', '3454321', '2024-04-22', 'BCA 123453213 an. Udin', '2024-03-27 01:37:57', '2024-03-27 09:11:21');
INSERT INTO `pengikut` (`id`, `sppd_id`, `nip`, `nama`, `jabatan`, `uang_transport`, `uang_penginapan`, `uang_harian`, `nip_bendahara`, `nama_bendahara`, `nomor_bukti`, `tanggal_bayar`, `transfer_ke`, `created_at`, `updated_at`) VALUES (4, 1, '564789', 'rina', 'Kasub1', 1500000, 2500000, 1500000, '2345364578', 'bagas', '1234534', '2024-05-01', 'BCA 0987655678 an Rina', '2024-03-27 01:37:52', NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'admin', '2024-01-06 12:07:58', '2024-01-06 12:07:58');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'pegawai', '2024-01-06 12:08:01', '2024-01-06 12:08:01');
COMMIT;

-- ----------------------------
-- Table structure for sppd
-- ----------------------------
DROP TABLE IF EXISTS `sppd`;
CREATE TABLE `sppd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `nomor_surat` varchar(255) DEFAULT NULL,
  `kode_surat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pejabat` varchar(255) DEFAULT NULL,
  `maksud` text,
  `tujuan` text,
  `mata_anggaran` varchar(255) DEFAULT NULL,
  `tanggal_berangkat` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `nip_pejabat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sppd
-- ----------------------------
BEGIN;
INSERT INTO `sppd` (`id`, `tanggal`, `nomor_surat`, `kode_surat`, `created_at`, `updated_at`, `pejabat`, `maksud`, `tujuan`, `mata_anggaran`, `tanggal_berangkat`, `tanggal_kembali`, `nip_pejabat`) VALUES (1, '2024-03-26', 'r7tyuiojsdf', 'jhghsdf', '2024-03-26 23:48:03', '2024-03-27 09:35:02', 'shara', 'glsdf', 'jkgsdf', 'jhkgsdf', '2024-03-27', '2024-03-29', '123454543');
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
  `nama_kelompok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `nama_kelompok`) VALUES (1, 'superadmin', NULL, 'superadmin', '2022-11-07 00:40:59', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2022-11-07 00:40:59', '2022-11-06 16:40:59', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
