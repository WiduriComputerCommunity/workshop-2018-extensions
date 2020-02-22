-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `pengajar`;
CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tgl_ngajar` date NOT NULL,
  `materi` varchar(30) NOT NULL,
  `peran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `unf`;
CREATE TABLE `unf` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `laundry` int(11) NOT NULL,
  `pwa` int(11) NOT NULL,
  `metode` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `penerima` varchar(50) DEFAULT NULL,
  `nomor_rekening` varchar(50) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `kehadiran_laundry` int(11) NOT NULL DEFAULT '0',
  `kehadiran_pwa` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2020-02-22 10:50:51
