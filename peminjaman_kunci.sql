-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2012 at 11:09 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `peminjaman_kunci`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunci_bts`
--

CREATE TABLE IF NOT EXISTS `kunci_bts` (
  `kunci` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`kunci`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunci_bts`
--

INSERT INTO `kunci_bts` (`kunci`) VALUES
('01-Deptan'),
('02-poin_squer');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(50) DEFAULT NULL,
  `perusahaan_peminjam` varchar(50) DEFAULT NULL,
  `tanggal_peminjaman` varchar(20) DEFAULT NULL,
  `tanggal_pengembalian` varchar(20) DEFAULT '''belum kembali''',
  `no_hp` varchar(20) DEFAULT NULL,
  `kunci` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `nama_peminjam`, `perusahaan_peminjam`, `tanggal_peminjaman`, `tanggal_pengembalian`, `no_hp`, `kunci`) VALUES
(1, 'fadli', 'bagian1', '2012-10-11', '2012-10-12', '081945516006', '01-Deptan'),
(2, 'aldy', 'bagian2', '2012-10-11', '2012-10-13', '0102981921972', '02-poin_squer'),
(3, 'dony', 'bagian2', '2012-10-13', '2012-10-14', '0182381637', '02-poin_squer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
